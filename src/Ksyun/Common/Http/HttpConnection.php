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

    public function getRequest($accessKey, $secretKey, $service, $region, $uri = '', $query = [], $headers = [])
    {
        $credentials = new Credentials($accessKey, $secretKey, "");
        $signer = new SignatureV4($service, $region);
        $uri = new Uri($this->url . $uri);
        $uri = $uri->withQuery(http_build_query($query));
        $request = new Request('GET', $uri, $headers);
        $signedRequest = $signer->signRequest($request, $credentials);
        $client = new Client();
        return $client->send($signedRequest);
    }

    public function postRequest($accessKey, $secretKey, $service, $region, $uri = '', $headers = [], $body = '')
    {
        $contentType = $this->profile->getHeaderContentType();

        $credentials = new Credentials($accessKey, $secretKey, "");
        $signer = new SignatureV4($service, $region);
        $uri = new Uri($this->url . $uri);

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

}

