<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDBInstanceReadReplicaRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "DBInstanceName" => null,
         /**String**/
        "AttachedVipId" => null,
         /**String**/
        "BillType" => null,
         /**String**/
        "Duration" => null,
         /**String**/
        "DurationUnit" => null,
         /**String**/
        "Vip" => null,
         /**Int**/
        "Mem" => null,
         /**Int**/
        "Disk" => null,
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
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            if(is_bool($param["DBInstanceName"])){
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"];
            }
        }
        if (array_key_exists("AttachedVipId",$param) and $param["AttachedVipId"] !== null) {
            if(is_bool($param["AttachedVipId"])){
                $this->RequestParams["AttachedVipId"] = $param["AttachedVipId"] ? "true" : "false";
            } else {
                $this->RequestParams["AttachedVipId"] = $param["AttachedVipId"];
            }
        }
        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            if(is_bool($param["BillType"])){
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
            }
        }
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            if(is_bool($param["Duration"])){
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
            }
        }
        if (array_key_exists("DurationUnit",$param) and $param["DurationUnit"] !== null) {
            if(is_bool($param["DurationUnit"])){
                $this->RequestParams["DurationUnit"] = $param["DurationUnit"] ? "true" : "false";
            } else {
                $this->RequestParams["DurationUnit"] = $param["DurationUnit"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            $res = $this->formatFilterParams("AvailabilityZone",$param["AvailabilityZone"]);
            $this->_unserialize("AvailabilityZone",$res);
        }
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            if(is_bool($param["Vip"])){
                $this->RequestParams["Vip"] = $param["Vip"] ? "true" : "false";
            } else {
                $this->RequestParams["Vip"] = $param["Vip"];
            }
        }
        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            if(is_bool($param["Mem"])){
                $this->RequestParams["Mem"] = $param["Mem"] ? "true" : "false";
            } else {
                $this->RequestParams["Mem"] = $param["Mem"];
            }
        }
        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            if(is_bool($param["Disk"])){
                $this->RequestParams["Disk"] = $param["Disk"] ? "true" : "false";
            } else {
                $this->RequestParams["Disk"] = $param["Disk"];
            }
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}