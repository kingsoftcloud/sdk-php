<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateVpcRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VpcName" => null,
        /**String**/
        "CidrBlock" => null,
        /**Boolean**/
        "ProvidedIpv6CidrBlock" => null,
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
        if (array_key_exists("VpcName", $param) and $param["VpcName"] !== null) {
            if (is_bool($param["VpcName"])) {
                $this->RequestParams["VpcName"] = $param["VpcName"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcName"] = $param["VpcName"];
            }
        }
        if (array_key_exists("CidrBlock", $param) and $param["CidrBlock"] !== null) {
            if (is_bool($param["CidrBlock"])) {
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["CidrBlock"] = $param["CidrBlock"];
            }
        }
        if (array_key_exists("ProvidedIpv6CidrBlock", $param) and $param["ProvidedIpv6CidrBlock"] !== null) {
            if (is_bool($param["ProvidedIpv6CidrBlock"])) {
                $this->RequestParams["ProvidedIpv6CidrBlock"] = $param["ProvidedIpv6CidrBlock"] ? "true" : "false";
            } else {
                $this->RequestParams["ProvidedIpv6CidrBlock"] = $param["ProvidedIpv6CidrBlock"];
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