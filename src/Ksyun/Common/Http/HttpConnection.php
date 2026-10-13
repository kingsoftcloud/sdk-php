<?php

namespace Ksyun\Common\Http;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use GuzzleHttp\Psr7\Utils;
use Ksyun\Common\Exception\KsyunSDKException;
use Aws\Signature\SignatureV4;
use Aws\Credentials\Credentials;
use GuzzleHttp\Client;

/**
 * http连接类
 * @package App\Ksyun\Common\http
 */
class HttpConnection
{
    private $profile;

    private $url;

    /**
     * @param string $url url
     * @param HttpOptions $profile
     */
    function __construct($url, $profile)
    {
        $this->url = $url;
        $this->profile = $profile;
    }

    private function getOptions()
    {
        $options = ["allow_redirects" => false];
        $options["timeout"] = $this->profile->getReqTimeout();
        $options["proxy"] = $this->profile->getProxy();
        return $options;
    }

    /**
     * 清理并规范化URI路径
     * 1. 移除查询参数（? 及其后的内容）
     * 2. 确保路径以 / 开头
     * 3. 移除尾部的 /
     * @param string $uri URI路径
     * @return string 清理后的URI路径
     */
    private function cleanUri($uri)
    {
        // 1. 移除查询参数
        if (strpos($uri, '?') !== false) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }

        // 2. 移除两端的空白
        $uri = trim($uri);

        // 3. 如果是空字符串，返回 /
        if ($uri === '') {
            return '/';
        }

        // 4. 确保以 / 开头
        if ($uri[0] !== '/') {
            $uri = '/' . $uri;
        }

        // 5. 移除尾部的 /（但保留单独的 / ）
        if (strlen($uri) > 1 && $uri[strlen($uri) - 1] === '/') {
            $uri = rtrim($uri, '/');
        }

        return $uri;
    }

    /**
     * 规范化base URL，确保没有尾部斜杠
     * @param string $url base URL
     * @return string 规范化后的URL
     */
    private function normalizeBaseUrl($url)
    {
        return rtrim($url, '/');
    }

    public function getRequest($accessKey, $secretKey, $service, $region, $uri = '', $query = [], $headers = [])
    {
        // 清理URI中的查询参数，确保只包含路径部分
        $uri = $this->cleanUri($uri);

        // 规范化base URL并拼接
        $fullUrl = $this->normalizeBaseUrl($this->url) . $uri;

        $credentials = new Credentials($accessKey, $secretKey, "");
        $signer = new SignatureV4($service, $region);
        $uri = new Uri($fullUrl);
        $uri = $uri->withQuery(http_build_query($query));
        $request = new Request('GET', $uri, $headers);
        $signedRequest = $signer->signRequest($request, $credentials);
        $client = new Client();
        return $client->send($signedRequest);
    }

    public function postRequest($accessKey, $secretKey, $service, $region, $uri = '', $headers = [], $body = '')
    {
        // 清理URI中的查询参数，确保只包含路径部分
        $uri = $this->cleanUri($uri);

        // 规范化base URL并拼接
        $fullUrl = $this->normalizeBaseUrl($this->url) . $uri;

        $contentType = $this->profile->getHeaderContentType();

        $credentials = new Credentials($accessKey, $secretKey, "");
        $signer = new SignatureV4($service, $region);
        $uri = new Uri($fullUrl);

        if ($contentType == HttpOptions::$CONTENT_TYPE_FORM) {
            if ($body) {
                $request = new Request('POST', $uri, $headers, http_build_query($body));
                $signedRequest = $signer->signRequest($request, $credentials);
                $client = new Client();
                return $client->send($signedRequest);
            }
        } elseif ($contentType == HttpOptions::$CONTENT_TYPE_JSON) {
            if ($body) {
                // 提取action和version参数
                $version = isset($body['Version']) ? $body['Version'] : null;
                $action = isset($body['Action']) ? $body['Action'] : null;
                // 从body中移除action和version参数
                unset($body['Action'], $body['Version']);
                // 将action和version添加到URL的查询参数中
                $queryParams = [];
                if ($action) {
                    $queryParams['Action'] = $action;
                }
                if ($version) {
                    $queryParams['Version'] = $version;
                }
                $uri = $uri->withQuery(http_build_query($queryParams));
                $body = Utils::streamFor(json_encode($body, JSON_UNESCAPED_UNICODE));
                $request = new Request('POST', $uri, $headers, $body);
                $signedRequest = $signer->signRequest($request, $credentials);
                $client = new Client();
                return $client->send($signedRequest);
            }
        }

        throw new KsyunSDKException("", "content_type only support (application/x-www-form-urlencoded,application/json)");
    }

    public function getStreamRequest($accessKey, $secretKey, $service, $region, $uri, $query, $headers, $onEvent)
    {
        $uri = new Uri($this->normalizeBaseUrl($this->url) . $this->cleanUri($uri));
        $uri = $uri->withQuery(http_build_query($query));
        $request = new Request('GET', $uri, $headers);
        return $this->sendStream($request, $accessKey, $secretKey, $service, $region, $onEvent);
    }

    public function postStreamRequest($accessKey, $secretKey, $service, $region, $uri, $headers, $body, $onEvent)
    {
        $uri = new Uri($this->normalizeBaseUrl($this->url) . $this->cleanUri($uri));
        $version = isset($body['Version']) ? $body['Version'] : null;
        $action = isset($body['Action']) ? $body['Action'] : null;
        unset($body['Action'], $body['Version']);
        $uri = $uri->withQuery(http_build_query(array_filter(['Action' => $action, 'Version' => $version])));
        $payload = $this->profile->getHeaderContentType() == HttpOptions::$CONTENT_TYPE_JSON
            ? json_encode($body, JSON_UNESCAPED_UNICODE)
            : http_build_query($body);
        $request = new Request('POST', $uri, $headers, $payload);
        return $this->sendStream($request, $accessKey, $secretKey, $service, $region, $onEvent);
    }

    private function sendStream($request, $accessKey, $secretKey, $service, $region, $onEvent)
    {
        $credentials = new Credentials($accessKey, $secretKey, '');
        $signedRequest = (new SignatureV4($service, $region))->signRequest($request, $credentials);
        // Guzzle timeout 是整条请求的总时长；SSE 由服务端/网关和调用方负责结束。
        $response = (new Client())->send($signedRequest, array_merge($this->getOptions(), ['stream' => true, 'timeout' => 0]));
        $status = $response->getStatusCode();
        if ($status < 200 || $status > 299) {
            throw new KsyunSDKException($response->getReasonPhrase(), (string)$response->getBody());
        }
        $contentType = $response->getHeaderLine('Content-Type');
        if (!preg_match('/^text\/event-stream(?:\s*;|\s*$)/i', $contentType)) {
            throw new KsyunSDKException('', 'Invalid SSE Content-Type: ' . ($contentType ?: 'missing'));
        }
        $stream = $response->getBody();
        $buffer = '';
        while (!$stream->eof()) {
            $buffer .= $stream->read(8192);
            while (preg_match('/^(.*?)(?:\r?\n){2}/s', $buffer, $match)) {
                $rawEvent = $match[1];
                $buffer = substr($buffer, strlen($match[0]));
                if ($rawEvent !== '' && call_user_func($onEvent, $rawEvent) === false) {
                    $stream->close();
                    return;
                }
            }
        }
        if ($buffer !== '') {
            call_user_func($onEvent, $buffer);
        }
        $stream->close();
    }

}
