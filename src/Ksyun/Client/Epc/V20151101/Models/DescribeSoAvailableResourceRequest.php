<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSoAvailableResourceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceChargeType" => null,
         /**String**/
        "InstanceTypeId" => null,
         /**String**/
        "ZoneId" => null,
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            if(is_bool($param["InstanceChargeType"])){
                $this->RequestParams["InstanceChargeType"] = $param["InstanceChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceChargeType"] = $param["InstanceChargeType"];
            }
        }
        if (array_key_exists("InstanceTypeId",$param) and $param["InstanceTypeId"] !== null) {
            if(is_bool($param["InstanceTypeId"])){
                $this->RequestParams["InstanceTypeId"] = $param["InstanceTypeId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceTypeId"] = $param["InstanceTypeId"];
            }
        }
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            if(is_bool($param["ZoneId"])){
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
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