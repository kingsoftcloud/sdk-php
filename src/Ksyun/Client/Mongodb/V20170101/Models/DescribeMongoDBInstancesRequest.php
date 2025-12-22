<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeMongoDBInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Area" => null,
         /**String**/
        "Vip" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "VnetId" => null,
         /**String**/
        "IamProjectId" => null,
         /**String**/
        "InstanceId" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "Mode" => null,
         /**String**/
        "DbVersion" => null,
         /**String**/
        "Status" => null,
         /**String**/
        "FuzzySearch" => null,
         /**String**/
        "TagKey" => null,
         /**String**/
        "TagValue" => null,
         /**Int**/
        "Offset" => null,
         /**Int**/
        "Limit" => null,
         /**String**/
        "OrderBy" => null,
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            if(is_bool($param["Area"])){
                $this->RequestParams["Area"] = $param["Area"] ? "true" : "false";
            } else {
                $this->RequestParams["Area"] = $param["Area"];
            }
        }
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            if(is_bool($param["Vip"])){
                $this->RequestParams["Vip"] = $param["Vip"] ? "true" : "false";
            } else {
                $this->RequestParams["Vip"] = $param["Vip"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("VnetId",$param) and $param["VnetId"] !== null) {
            if(is_bool($param["VnetId"])){
                $this->RequestParams["VnetId"] = $param["VnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["VnetId"] = $param["VnetId"];
            }
        }
        if (array_key_exists("IamProjectId",$param) and $param["IamProjectId"] !== null) {
            if(is_bool($param["IamProjectId"])){
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            if(is_bool($param["Mode"])){
                $this->RequestParams["Mode"] = $param["Mode"] ? "true" : "false";
            } else {
                $this->RequestParams["Mode"] = $param["Mode"];
            }
        }
        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            if(is_bool($param["DbVersion"])){
                $this->RequestParams["DbVersion"] = $param["DbVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["DbVersion"] = $param["DbVersion"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
            }
        }
        if (array_key_exists("FuzzySearch",$param) and $param["FuzzySearch"] !== null) {
            if(is_bool($param["FuzzySearch"])){
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"] ? "true" : "false";
            } else {
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"];
            }
        }
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            if(is_bool($param["TagKey"])){
                $this->RequestParams["TagKey"] = $param["TagKey"] ? "true" : "false";
            } else {
                $this->RequestParams["TagKey"] = $param["TagKey"];
            }
        }
        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            if(is_bool($param["TagValue"])){
                $this->RequestParams["TagValue"] = $param["TagValue"] ? "true" : "false";
            } else {
                $this->RequestParams["TagValue"] = $param["TagValue"];
            }
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            if(is_bool($param["Offset"])){
                $this->RequestParams["Offset"] = $param["Offset"] ? "true" : "false";
            } else {
                $this->RequestParams["Offset"] = $param["Offset"];
            }
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            if(is_bool($param["Limit"])){
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
            }
        }
        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            if(is_bool($param["OrderBy"])){
                $this->RequestParams["OrderBy"] = $param["OrderBy"] ? "true" : "false";
            } else {
                $this->RequestParams["OrderBy"] = $param["OrderBy"];
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