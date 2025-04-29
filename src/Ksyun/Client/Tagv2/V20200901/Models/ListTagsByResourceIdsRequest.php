<?php

namespace Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListTagsByResourceIdsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ResourceType" => null,
        /**String**/
        "ResourceUuids" => null,
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
        if (array_key_exists("ResourceType", $param) and $param["ResourceType"] !== null) {
            if (is_bool($param["ResourceType"])) {
                $this->RequestParams["ResourceType"] = $param["ResourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceType"] = $param["ResourceType"];
            }
        }
        if (array_key_exists("ResourceUuids", $param) and $param["ResourceUuids"] !== null) {
            if (is_bool($param["ResourceUuids"])) {
                $this->RequestParams["ResourceUuids"] = $param["ResourceUuids"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceUuids"] = $param["ResourceUuids"];
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