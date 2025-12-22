<?php
namespace  Ksyun\Client\Influxdb\V20191010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProjectId" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "ProductType" => null,
         /**String**/
        "EngineVersion" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "EbsType" => null,
         /**Int**/
        "EbsSize" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "SubnetId" => null,
         /**Int**/
        "BillType" => null,
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            if(is_bool($param["ProductType"])){
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            if(is_bool($param["EngineVersion"])){
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("EbsType",$param) and $param["EbsType"] !== null) {
            if(is_bool($param["EbsType"])){
                $this->RequestParams["EbsType"] = $param["EbsType"] ? "true" : "false";
            } else {
                $this->RequestParams["EbsType"] = $param["EbsType"];
            }
        }
        if (array_key_exists("EbsSize",$param) and $param["EbsSize"] !== null) {
            if(is_bool($param["EbsSize"])){
                $this->RequestParams["EbsSize"] = $param["EbsSize"] ? "true" : "false";
            } else {
                $this->RequestParams["EbsSize"] = $param["EbsSize"];
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
        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            if(is_bool($param["BillType"])){
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
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