<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AssociatePrivateLinkServerRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "PrivateLinkServerId" => null,
        /**String**/
        "LoadBalancerId" => null,
        /**Int**/
        "ListenerPort" => null,
        /**String**/
        "ProjectId" => null,
        /**String**/
        "DeleteProtection" => null,
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
        if (array_key_exists("PrivateLinkServerId", $param) and $param["PrivateLinkServerId"] !== null) {
            if (is_bool($param["PrivateLinkServerId"])) {
                $this->RequestParams["PrivateLinkServerId"] = $param["PrivateLinkServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateLinkServerId"] = $param["PrivateLinkServerId"];
            }
        }
        if (array_key_exists("LoadBalancerId", $param) and $param["LoadBalancerId"] !== null) {
            if (is_bool($param["LoadBalancerId"])) {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"];
            }
        }
        if (array_key_exists("ListenerPort", $param) and $param["ListenerPort"] !== null) {
            if (is_bool($param["ListenerPort"])) {
                $this->RequestParams["ListenerPort"] = $param["ListenerPort"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerPort"] = $param["ListenerPort"];
            }
        }
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("DeleteProtection", $param) and $param["DeleteProtection"] !== null) {
            if (is_bool($param["DeleteProtection"])) {
                $this->RequestParams["DeleteProtection"] = $param["DeleteProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["DeleteProtection"] = $param["DeleteProtection"];
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