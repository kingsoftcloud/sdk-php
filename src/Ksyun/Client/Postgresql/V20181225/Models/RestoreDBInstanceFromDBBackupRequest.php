<?php

namespace Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RestoreDBInstanceFromDBBackupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBBackupIdentifier" => null,
        /**String**/
        "DBInstanceType" => null,
        /**String**/
        "DBInstanceName" => null,
        /**String**/
        "BillType" => null,
        /**Int**/
        "Duration" => null,
        /**String**/
        "DurationUnit" => null,
        /**String**/
        "VpcId" => null,
        /**String**/
        "SubnetId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $AvailabilityZone = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBBackupIdentifier", $param) and $param["DBBackupIdentifier"] !== null) {
            if (is_bool($param["DBBackupIdentifier"])) {
                $this->RequestParams["DBBackupIdentifier"] = $param["DBBackupIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBBackupIdentifier"] = $param["DBBackupIdentifier"];
            }
        }
        if (array_key_exists("DBInstanceType", $param) and $param["DBInstanceType"] !== null) {
            if (is_bool($param["DBInstanceType"])) {
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"];
            }
        }
        if (array_key_exists("DBInstanceName", $param) and $param["DBInstanceName"] !== null) {
            if (is_bool($param["DBInstanceName"])) {
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"];
            }
        }
        if (array_key_exists("BillType", $param) and $param["BillType"] !== null) {
            if (is_bool($param["BillType"])) {
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
            }
        }
        if (array_key_exists("Duration", $param) and $param["Duration"] !== null) {
            if (is_bool($param["Duration"])) {
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
            }
        }
        if (array_key_exists("DurationUnit", $param) and $param["DurationUnit"] !== null) {
            if (is_bool($param["DurationUnit"])) {
                $this->RequestParams["DurationUnit"] = $param["DurationUnit"] ? "true" : "false";
            } else {
                $this->RequestParams["DurationUnit"] = $param["DurationUnit"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            $res = $this->formatFilterParams("AvailabilityZone", $param["AvailabilityZone"]);
            $this->_unserialize("AvailabilityZone", $res);
        }
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("SubnetId", $param) and $param["SubnetId"] !== null) {
            if (is_bool($param["SubnetId"])) {
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
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