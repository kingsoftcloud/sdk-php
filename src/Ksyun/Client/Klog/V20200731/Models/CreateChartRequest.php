<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateChartRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DashboardId" => null,
         /**String**/
        "ChartName" => null,
         /**String**/
        "ChartType" => null,
         /**String**/
        "Search" => null,
         /**String**/
        "Display" => null,
         /**String**/
        "LogPoolName" => null,
         /**String**/
        "TimeRange" => null,
         /**String**/
        "Query" => null,
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
        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            if(is_bool($param["DashboardId"])){
                $this->RequestParams["DashboardId"] = $param["DashboardId"] ? "true" : "false";
            } else {
                $this->RequestParams["DashboardId"] = $param["DashboardId"];
            }
        }
        if (array_key_exists("ChartName",$param) and $param["ChartName"] !== null) {
            if(is_bool($param["ChartName"])){
                $this->RequestParams["ChartName"] = $param["ChartName"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartName"] = $param["ChartName"];
            }
        }
        if (array_key_exists("ChartType",$param) and $param["ChartType"] !== null) {
            if(is_bool($param["ChartType"])){
                $this->RequestParams["ChartType"] = $param["ChartType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartType"] = $param["ChartType"];
            }
        }
        if (array_key_exists("Search",$param) and $param["Search"] !== null) {
            if(is_bool($param["Search"])){
                $this->RequestParams["Search"] = $param["Search"] ? "true" : "false";
            } else {
                $this->RequestParams["Search"] = $param["Search"];
            }
        }
        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            if(is_bool($param["Display"])){
                $this->RequestParams["Display"] = $param["Display"] ? "true" : "false";
            } else {
                $this->RequestParams["Display"] = $param["Display"];
            }
        }
        if (array_key_exists("LogPoolName",$param) and $param["LogPoolName"] !== null) {
            if(is_bool($param["LogPoolName"])){
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"];
            }
        }
        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            if(is_bool($param["TimeRange"])){
                $this->RequestParams["TimeRange"] = $param["TimeRange"] ? "true" : "false";
            } else {
                $this->RequestParams["TimeRange"] = $param["TimeRange"];
            }
        }
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            if(is_bool($param["Query"])){
                $this->RequestParams["Query"] = $param["Query"] ? "true" : "false";
            } else {
                $this->RequestParams["Query"] = $param["Query"];
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