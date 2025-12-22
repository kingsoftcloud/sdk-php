<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBInstanceTypeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "DBInstanceType" => null,
         /**String**/
        "BillType" => null,
         /**Int**/
        "Duration" => null,
         /**String**/
        "DurationUnit" => null,
         /**String**/
        "AvailabilityZone" => null,
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
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            if(is_bool($param["DBInstanceType"])){
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"];
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
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
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