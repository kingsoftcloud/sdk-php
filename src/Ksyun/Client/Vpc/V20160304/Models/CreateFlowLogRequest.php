<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateFlowLogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FlowLogName" => null,
         /**String**/
        "ResourceType" => null,
         /**String**/
        "ResourceId" => null,
         /**String**/
        "TrafficType" => null,
         /**String**/
        "ProjectName" => null,
         /**String**/
        "LogPoolName" => null,
         /**Int**/
        "WindowTime" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
            if(is_bool($param["FlowLogName"])){
                $this->RequestParams["FlowLogName"] = $param["FlowLogName"] ? "true" : "false";
            } else {
                $this->RequestParams["FlowLogName"] = $param["FlowLogName"];
            }
        }
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            if(is_bool($param["ResourceType"])){
                $this->RequestParams["ResourceType"] = $param["ResourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceType"] = $param["ResourceType"];
            }
        }
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            if(is_bool($param["ResourceId"])){
                $this->RequestParams["ResourceId"] = $param["ResourceId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceId"] = $param["ResourceId"];
            }
        }
        if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
            if(is_bool($param["TrafficType"])){
                $this->RequestParams["TrafficType"] = $param["TrafficType"] ? "true" : "false";
            } else {
                $this->RequestParams["TrafficType"] = $param["TrafficType"];
            }
        }
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            if(is_bool($param["ProjectName"])){
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("LogPoolName",$param) and $param["LogPoolName"] !== null) {
            if(is_bool($param["LogPoolName"])){
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"];
            }
        }
        if (array_key_exists("WindowTime",$param) and $param["WindowTime"] !== null) {
            if(is_bool($param["WindowTime"])){
                $this->RequestParams["WindowTime"] = $param["WindowTime"] ? "true" : "false";
            } else {
                $this->RequestParams["WindowTime"] = $param["WindowTime"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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