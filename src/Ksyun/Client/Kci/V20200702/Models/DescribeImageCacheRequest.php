<?php

namespace Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeImageCacheRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ImageCacheName" => null,
        /**String**/
        "Image" => null,
        /**Int**/
        "Marker" => null,
        /**Int**/
        "MaxResults" => null,
    ];

    /**特殊参数类型:Filter**/
    public $ImageCacheId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageCacheId", $param) and $param["ImageCacheId"] !== null) {
            $res = $this->formatFilterParams("ImageCacheId", $param["ImageCacheId"]);
            $this->_unserialize("ImageCacheId", $res);
        }
        if (array_key_exists("ImageCacheName", $param) and $param["ImageCacheName"] !== null) {
            if (is_bool($param["ImageCacheName"])) {
                $this->RequestParams["ImageCacheName"] = $param["ImageCacheName"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageCacheName"] = $param["ImageCacheName"];
            }
        }
        if (array_key_exists("Image", $param) and $param["Image"] !== null) {
            if (is_bool($param["Image"])) {
                $this->RequestParams["Image"] = $param["Image"] ? "true" : "false";
            } else {
                $this->RequestParams["Image"] = $param["Image"];
            }
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            if (is_bool($param["Marker"])) {
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults", $param) and $param["MaxResults"] !== null) {
            if (is_bool($param["MaxResults"])) {
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}