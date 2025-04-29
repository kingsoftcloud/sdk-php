<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreatePrivateLinkServerRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "PrivateLinkServerName" => null,
        /**String**/
        "ListenerId" => null,
        /**String**/
        "Description" => null,
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
        if (array_key_exists("PrivateLinkServerName", $param) and $param["PrivateLinkServerName"] !== null) {
            if (is_bool($param["PrivateLinkServerName"])) {
                $this->RequestParams["PrivateLinkServerName"] = $param["PrivateLinkServerName"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateLinkServerName"] = $param["PrivateLinkServerName"];
            }
        }
        if (array_key_exists("ListenerId", $param) and $param["ListenerId"] !== null) {
            if (is_bool($param["ListenerId"])) {
                $this->RequestParams["ListenerId"] = $param["ListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerId"] = $param["ListenerId"];
            }
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            if (is_bool($param["Description"])) {
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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