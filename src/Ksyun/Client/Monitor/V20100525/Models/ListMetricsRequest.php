<?php
namespace  Ksyun\Client\Monitor\V20100525\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListMetricsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Namespace" => null,
         /**String**/
        "InstanceID" => null,
         /**String**/
        "MetricName" => null,
         /**Int**/
        "PageIndex" => null,
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            if(is_bool($param["InstanceID"])){
                $this->RequestParams["InstanceID"] = $param["InstanceID"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceID"] = $param["InstanceID"];
            }
        }
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            if(is_bool($param["MetricName"])){
                $this->RequestParams["MetricName"] = $param["MetricName"] ? "true" : "false";
            } else {
                $this->RequestParams["MetricName"] = $param["MetricName"];
            }
        }
        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            if(is_bool($param["PageIndex"])){
                $this->RequestParams["PageIndex"] = $param["PageIndex"] ? "true" : "false";
            } else {
                $this->RequestParams["PageIndex"] = $param["PageIndex"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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