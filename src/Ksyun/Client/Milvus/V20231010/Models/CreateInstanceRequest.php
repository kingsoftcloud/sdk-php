<?php
namespace  Ksyun\Client\Milvus\V20231010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceName" => null,
         /**String**/
        "AdminPassword" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "VnetId" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "ProductType" => null,
         /**String**/
        "DBInstanceType" => null,
         /**Array**/
        "Az" => null,
         /**String**/
        "Engine" => null,
         /**String**/
        "EngineVersion" => null,
         /**String**/
        "AdminUser" => null,
         /**String**/
        "Cu" => null,
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            if(is_bool($param["AdminPassword"])){
                $this->RequestParams["AdminPassword"] = $param["AdminPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["AdminPassword"] = $param["AdminPassword"];
            }
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("VnetId",$param) and $param["VnetId"] !== null) {
            if(is_bool($param["VnetId"])){
                $this->RequestParams["VnetId"] = $param["VnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["VnetId"] = $param["VnetId"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            if(is_bool($param["ProductType"])){
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            if(is_bool($param["DBInstanceType"])){
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"];
            }
        }
        if (array_key_exists("Az",$param) and $param["Az"] !== null) {
            if(is_bool($param["Az"])){
                $this->RequestParams["Az"] = $param["Az"] ? "true" : "false";
            } else {
                $this->RequestParams["Az"] = $param["Az"];
            }
        }
        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            if(is_bool($param["Engine"])){
                $this->RequestParams["Engine"] = $param["Engine"] ? "true" : "false";
            } else {
                $this->RequestParams["Engine"] = $param["Engine"];
            }
        }
        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            if(is_bool($param["EngineVersion"])){
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"];
            }
        }
        if (array_key_exists("AdminUser",$param) and $param["AdminUser"] !== null) {
            if(is_bool($param["AdminUser"])){
                $this->RequestParams["AdminUser"] = $param["AdminUser"] ? "true" : "false";
            } else {
                $this->RequestParams["AdminUser"] = $param["AdminUser"];
            }
        }
        if (array_key_exists("Cu",$param) and $param["Cu"] !== null) {
            if(is_bool($param["Cu"])){
                $this->RequestParams["Cu"] = $param["Cu"] ? "true" : "false";
            } else {
                $this->RequestParams["Cu"] = $param["Cu"];
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