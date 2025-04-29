<?php

namespace Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTagAndAttachResourceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "TagKey" => null,
        /**String**/
        "TagValue" => null,
        /**String**/
        "ResourceType" => null,
        /**String**/
        "ResourceUuid" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TagKey", $param) and $param["TagKey"] !== null) {
            if (is_bool($param["TagKey"])) {
                $this->RequestParams["TagKey"] = $param["TagKey"] ? "true" : "false";
            } else {
                $this->RequestParams["TagKey"] = $param["TagKey"];
            }
        }
        if (array_key_exists("TagValue", $param) and $param["TagValue"] !== null) {
            if (is_bool($param["TagValue"])) {
                $this->RequestParams["TagValue"] = $param["TagValue"] ? "true" : "false";
            } else {
                $this->RequestParams["TagValue"] = $param["TagValue"];
            }
        }
        if (array_key_exists("ResourceType", $param) and $param["ResourceType"] !== null) {
            if (is_bool($param["ResourceType"])) {
                $this->RequestParams["ResourceType"] = $param["ResourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceType"] = $param["ResourceType"];
            }
        }
        if (array_key_exists("ResourceUuid", $param) and $param["ResourceUuid"] !== null) {
            if (is_bool($param["ResourceUuid"])) {
                $this->RequestParams["ResourceUuid"] = $param["ResourceUuid"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceUuid"] = $param["ResourceUuid"];
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