<?php

namespace Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyClusterInfoRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ClusterId" => null,
        /**String**/
        "ClusterName" => null,
        /**String**/
        "ClusterDesc" => null,
        /**Boolean**/
        "EnableKMSE" => null,
        /**Object**/
        "ControlPlaneLog" => null,
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
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            if (is_bool($param["ClusterId"])) {
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("ClusterName", $param) and $param["ClusterName"] !== null) {
            if (is_bool($param["ClusterName"])) {
                $this->RequestParams["ClusterName"] = $param["ClusterName"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterName"] = $param["ClusterName"];
            }
        }
        if (array_key_exists("ClusterDesc", $param) and $param["ClusterDesc"] !== null) {
            if (is_bool($param["ClusterDesc"])) {
                $this->RequestParams["ClusterDesc"] = $param["ClusterDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterDesc"] = $param["ClusterDesc"];
            }
        }
        if (array_key_exists("EnableKMSE", $param) and $param["EnableKMSE"] !== null) {
            if (is_bool($param["EnableKMSE"])) {
                $this->RequestParams["EnableKMSE"] = $param["EnableKMSE"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableKMSE"] = $param["EnableKMSE"];
            }
        }
        if (array_key_exists("ControlPlaneLog", $param) and $param["ControlPlaneLog"] !== null) {
            if (is_bool($param["ControlPlaneLog"])) {
                $this->RequestParams["ControlPlaneLog"] = $param["ControlPlaneLog"] ? "true" : "false";
            } else {
                $this->RequestParams["ControlPlaneLog"] = $param["ControlPlaneLog"];
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