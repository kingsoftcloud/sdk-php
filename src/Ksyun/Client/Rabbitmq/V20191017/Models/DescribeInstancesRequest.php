<?php
namespace  Ksyun\Client\Rabbitmq\V20191017\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "SubnetId" => null,
         /**Int**/
        "Offset" => null,
         /**Int**/
        "Limit" => null,
         /**String**/
        "OrderBy" => null,
         /**String**/
        "ProjectId" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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