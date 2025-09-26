<?php
namespace  Ksyun\Client\Cdn\V20200901\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetDomainUsageDataRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "Metric" => null,
         /**String**/
        "CdnType" => null,
         /**String**/
        "Domains" => null,
         /**String**/
        "Areas" => null,
         /**String**/
        "Interval" => null,
         /**String**/
        "RequestId" => null,
         /**String**/
        "PeakTime" => null,
         /**String**/
        "Time" => null,
         /**String**/
        "Value" => null,
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
        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            if(is_bool($param["Metric"])){
                $this->RequestParams["Metric"] = $param["Metric"] ? "true" : "false";
            } else {
                $this->RequestParams["Metric"] = $param["Metric"];
            }
        }
        if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
            if(is_bool($param["CdnType"])){
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            if(is_bool($param["Domains"])){
                $this->RequestParams["Domains"] = $param["Domains"] ? "true" : "false";
            } else {
                $this->RequestParams["Domains"] = $param["Domains"];
            }
        }
        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            if(is_bool($param["Areas"])){
                $this->RequestParams["Areas"] = $param["Areas"] ? "true" : "false";
            } else {
                $this->RequestParams["Areas"] = $param["Areas"];
            }
        }
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            if(is_bool($param["Interval"])){
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            if(is_bool($param["RequestId"])){
                $this->RequestParams["RequestId"] = $param["RequestId"] ? "true" : "false";
            } else {
                $this->RequestParams["RequestId"] = $param["RequestId"];
            }
        }
        if (array_key_exists("PeakTime",$param) and $param["PeakTime"] !== null) {
            if(is_bool($param["PeakTime"])){
                $this->RequestParams["PeakTime"] = $param["PeakTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PeakTime"] = $param["PeakTime"];
            }
        }
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            if(is_bool($param["Time"])){
                $this->RequestParams["Time"] = $param["Time"] ? "true" : "false";
            } else {
                $this->RequestParams["Time"] = $param["Time"];
            }
        }
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            if(is_bool($param["Value"])){
                $this->RequestParams["Value"] = $param["Value"] ? "true" : "false";
            } else {
                $this->RequestParams["Value"] = $param["Value"];
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