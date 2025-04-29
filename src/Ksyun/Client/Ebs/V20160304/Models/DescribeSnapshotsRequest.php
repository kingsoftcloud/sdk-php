<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSnapshotsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VolumeId" => null,
        /**String**/
        "VolumeCategory" => null,
        /**String**/
        "SnapshotId" => null,
        /**String**/
        "AvailabilityZone" => null,
        /**String**/
        "SnapshotName" => null,
        /**Int**/
        "PageNumber" => null,
        /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("VolumeId", $param) and $param["VolumeId"] !== null) {
            if (is_bool($param["VolumeId"])) {
                $this->RequestParams["VolumeId"] = $param["VolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeId"] = $param["VolumeId"];
            }
        }
        if (array_key_exists("VolumeCategory", $param) and $param["VolumeCategory"] !== null) {
            if (is_bool($param["VolumeCategory"])) {
                $this->RequestParams["VolumeCategory"] = $param["VolumeCategory"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeCategory"] = $param["VolumeCategory"];
            }
        }
        if (array_key_exists("SnapshotId", $param) and $param["SnapshotId"] !== null) {
            if (is_bool($param["SnapshotId"])) {
                $this->RequestParams["SnapshotId"] = $param["SnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotId"] = $param["SnapshotId"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            if (is_bool($param["AvailabilityZone"])) {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("SnapshotName", $param) and $param["SnapshotName"] !== null) {
            if (is_bool($param["SnapshotName"])) {
                $this->RequestParams["SnapshotName"] = $param["SnapshotName"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotName"] = $param["SnapshotName"];
            }
        }
        if (array_key_exists("PageNumber", $param) and $param["PageNumber"] !== null) {
            if (is_bool($param["PageNumber"])) {
                $this->RequestParams["PageNumber"] = $param["PageNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNumber"] = $param["PageNumber"];
            }
        }
        if (array_key_exists("PageSize", $param) and $param["PageSize"] !== null) {
            if (is_bool($param["PageSize"])) {
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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