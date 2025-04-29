<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribePriceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceType" => null,
        /**String**/
        "SystemDisk.DiskSize" => null,
        /**String**/
        "ImageId" => null,
        /**String**/
        "ChargeType" => null,
        /**Int**/
        "PurchaseTime" => null,
        /**Int**/
        "DataDiskGb" => null,
        /**Int**/
        "MaxCount" => null,
        /**String**/
        "SystemDisk.DiskType" => null,
    ];

    /**特殊参数类型:Filter**/
    public $DataDisk = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceType", $param) and $param["InstanceType"] !== null) {
            if (is_bool($param["InstanceType"])) {
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("SystemDisk.DiskSize", $param) and $param["SystemDisk.DiskSize"] !== null) {
            if (is_bool($param["SystemDisk.DiskSize"])) {
                $this->RequestParams["SystemDisk.DiskSize"] = $param["SystemDisk.DiskSize"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskSize"] = $param["SystemDisk.DiskSize"];
            }
        }
        if (array_key_exists("ImageId", $param) and $param["ImageId"] !== null) {
            if (is_bool($param["ImageId"])) {
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("ChargeType", $param) and $param["ChargeType"] !== null) {
            if (is_bool($param["ChargeType"])) {
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("PurchaseTime", $param) and $param["PurchaseTime"] !== null) {
            if (is_bool($param["PurchaseTime"])) {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }
        if (array_key_exists("DataDiskGb", $param) and $param["DataDiskGb"] !== null) {
            if (is_bool($param["DataDiskGb"])) {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskGb"] = $param["DataDiskGb"];
            }
        }
        if (array_key_exists("DataDisk", $param) and $param["DataDisk"] !== null) {
            $res = $this->formatFilterParams("DataDisk", $param["DataDisk"]);
            $this->_unserialize("DataDisk", $res);
        }
        if (array_key_exists("MaxCount", $param) and $param["MaxCount"] !== null) {
            if (is_bool($param["MaxCount"])) {
                $this->RequestParams["MaxCount"] = $param["MaxCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxCount"] = $param["MaxCount"];
            }
        }
        if (array_key_exists("SystemDisk.DiskType", $param) and $param["SystemDisk.DiskType"] !== null) {
            if (is_bool($param["SystemDisk.DiskType"])) {
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk.DiskType"] = $param["SystemDisk.DiskType"];
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