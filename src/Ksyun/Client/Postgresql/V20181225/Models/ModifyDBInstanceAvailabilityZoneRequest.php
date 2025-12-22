<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBInstanceAvailabilityZoneRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "AvailabilityZone.1" => null,
         /**String**/
        "AvailabilityZone.2" => null,
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
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("AvailabilityZone.1",$param) and $param["AvailabilityZone.1"] !== null) {
            if(is_bool($param["AvailabilityZone.1"])){
                $this->RequestParams["AvailabilityZone.1"] = $param["AvailabilityZone.1"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone.1"] = $param["AvailabilityZone.1"];
            }
        }
        if (array_key_exists("AvailabilityZone.2",$param) and $param["AvailabilityZone.2"] !== null) {
            if(is_bool($param["AvailabilityZone.2"])){
                $this->RequestParams["AvailabilityZone.2"] = $param["AvailabilityZone.2"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone.2"] = $param["AvailabilityZone.2"];
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