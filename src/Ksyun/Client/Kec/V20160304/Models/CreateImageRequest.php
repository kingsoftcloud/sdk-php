<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateImageRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**String**/
        "Name" => null,
        /**String**/
        "Type" => null,
        /**Boolean**/
        "InstantAccess" => null,
    ];

    /**特殊参数类型:Filter**/
    public $DataDiskIds = [];
    /**特殊参数类型:Filter**/
    public $SnapshotIds = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Type", $param) and $param["Type"] !== null) {
            if (is_bool($param["Type"])) {
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("DataDiskIds", $param) and $param["DataDiskIds"] !== null) {
            $res = $this->formatFilterParams("DataDiskIds", $param["DataDiskIds"]);
            $this->_unserialize("DataDiskIds", $res);
        }
        if (array_key_exists("SnapshotIds", $param) and $param["SnapshotIds"] !== null) {
            $res = $this->formatFilterParams("SnapshotIds", $param["SnapshotIds"]);
            $this->_unserialize("SnapshotIds", $res);
        }
        if (array_key_exists("InstantAccess", $param) and $param["InstantAccess"] !== null) {
            if (is_bool($param["InstantAccess"])) {
                $this->RequestParams["InstantAccess"] = $param["InstantAccess"] ? "true" : "false";
            } else {
                $this->RequestParams["InstantAccess"] = $param["InstantAccess"];
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