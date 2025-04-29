<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateVolumeRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VolumeName" => null,
        /**String**/
        "VolumeType" => null,
        /**String**/
        "VolumeDesc" => null,
        /**Int**/
        "Size" => null,
        /**String**/
        "AvailabilityZone" => null,
        /**String**/
        "ChargeType" => null,
        /**Int**/
        "PurchaseTime" => null,
        /**String**/
        "ProjectId" => null,
        /**String**/
        "SubOrderId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VolumeName", $param) and $param["VolumeName"] !== null) {
            if (is_bool($param["VolumeName"])) {
                $this->RequestParams["VolumeName"] = $param["VolumeName"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeName"] = $param["VolumeName"];
            }
        }
        if (array_key_exists("VolumeType", $param) and $param["VolumeType"] !== null) {
            if (is_bool($param["VolumeType"])) {
                $this->RequestParams["VolumeType"] = $param["VolumeType"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeType"] = $param["VolumeType"];
            }
        }
        if (array_key_exists("VolumeDesc", $param) and $param["VolumeDesc"] !== null) {
            if (is_bool($param["VolumeDesc"])) {
                $this->RequestParams["VolumeDesc"] = $param["VolumeDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeDesc"] = $param["VolumeDesc"];
            }
        }
        if (array_key_exists("Size", $param) and $param["Size"] !== null) {
            if (is_bool($param["Size"])) {
                $this->RequestParams["Size"] = $param["Size"] ? "true" : "false";
            } else {
                $this->RequestParams["Size"] = $param["Size"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            if (is_bool($param["AvailabilityZone"])) {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
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
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("SubOrderId", $param) and $param["SubOrderId"] !== null) {
            if (is_bool($param["SubOrderId"])) {
                $this->RequestParams["SubOrderId"] = $param["SubOrderId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubOrderId"] = $param["SubOrderId"];
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