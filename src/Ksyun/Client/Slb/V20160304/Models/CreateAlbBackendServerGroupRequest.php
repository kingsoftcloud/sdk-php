<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAlbBackendServerGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VpcId" => null,
        /**String**/
        "Name" => null,
        /**String**/
        "BackendServerType" => null,
        /**String**/
        "UpstreamKeepalive" => null,
        /**String**/
        "Protocol" => null,
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
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("BackendServerType", $param) and $param["BackendServerType"] !== null) {
            if (is_bool($param["BackendServerType"])) {
                $this->RequestParams["BackendServerType"] = $param["BackendServerType"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerType"] = $param["BackendServerType"];
            }
        }
        if (array_key_exists("UpstreamKeepalive", $param) and $param["UpstreamKeepalive"] !== null) {
            if (is_bool($param["UpstreamKeepalive"])) {
                $this->RequestParams["UpstreamKeepalive"] = $param["UpstreamKeepalive"] ? "true" : "false";
            } else {
                $this->RequestParams["UpstreamKeepalive"] = $param["UpstreamKeepalive"];
            }
        }
        if (array_key_exists("Protocol", $param) and $param["Protocol"] !== null) {
            if (is_bool($param["Protocol"])) {
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
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