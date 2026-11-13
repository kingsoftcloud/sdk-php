<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetComponentObservabilityOverviewRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ComponentType" => null,
         /**Int**/
        "StartTime" => null,
         /**Int**/
        "EndTime" => null,
         /**Int**/
        "IntervalSeconds" => null,
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
        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            if(is_bool($param["ComponentType"])){
                $this->RequestParams["ComponentType"] = $param["ComponentType"] ? "true" : "false";
            } else {
                $this->RequestParams["ComponentType"] = $param["ComponentType"];
            }
        }
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            if(is_bool($param["EndTime"])){
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
            }
        }
        if (array_key_exists("IntervalSeconds",$param) and $param["IntervalSeconds"] !== null) {
            if(is_bool($param["IntervalSeconds"])){
                $this->RequestParams["IntervalSeconds"] = $param["IntervalSeconds"] ? "true" : "false";
            } else {
                $this->RequestParams["IntervalSeconds"] = $param["IntervalSeconds"];
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