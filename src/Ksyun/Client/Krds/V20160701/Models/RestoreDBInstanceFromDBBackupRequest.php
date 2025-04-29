<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RestoreDBInstanceFromDBBackupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBInstanceName" => null,
        /**String**/
        "DBBackupIdentifier" => null,
        /**String**/
        "DBInstanceType" => null,
        /**String**/
        "ProjectId" => null,
        /**String**/
        "AvailabilityZone" => null,
        /**Int**/
        "Duration" => null,
        /**String**/
        "DurationUnit" => null,
        /**Int**/
        "Port" => null,
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
        if (array_key_exists("DBInstanceName", $param) and $param["DBInstanceName"] !== null) {
            if (is_bool($param["DBInstanceName"])) {
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"];
            }
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
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            if (is_bool($param["AvailabilityZone"])) {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
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
        if (array_key_exists("Port", $param) and $param["Port"] !== null) {
            if (is_bool($param["Port"])) {
                $this->RequestParams["Port"] = $param["Port"] ? "true" : "false";
            } else {
                $this->RequestParams["Port"] = $param["Port"];
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