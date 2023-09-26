<?php
namespace  Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProductType" => null,
         /**String**/
        "InstanceName" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "AdminUser" => null,
         /**String**/
        "AdminPassword" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "Engine" => null,
         /**String**/
        "EngineVersion" => null,
         /**String**/
        "ProjectId" => null,
         /**Int**/
        "BillType" => null,
         /**Int**/
        "Duration" => null,
         /**Int**/
        "EbsSize" => null,
         /**String**/
        "EbsType" => null,
         /**Int**/
        "Mem" => null,
         /**Int**/
        "Cpu" => null,
         /**Int**/
        "TcpPort" => null,
         /**Int**/
        "HttpPort" => null,
         /**String**/
        "Az" => null,
         /**Int**/
        "NodeNum" => null,
         /**String**/
        "PreferredBackupTime" => null,
         /**String**/
        "SecurityGroupId" => null,
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
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            if(is_bool($param["ProductType"])){
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            if(is_bool($param["InstanceName"])){
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("AdminUser",$param) and $param["AdminUser"] !== null) {
            if(is_bool($param["AdminUser"])){
                $this->RequestParams["AdminUser"] = $param["AdminUser"] ? "true" : "false";
            } else {
                $this->RequestParams["AdminUser"] = $param["AdminUser"];
            }
        }
        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            if(is_bool($param["AdminPassword"])){
                $this->RequestParams["AdminPassword"] = $param["AdminPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["AdminPassword"] = $param["AdminPassword"];
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            if(is_bool($param["BillType"])){
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
            }
        }
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            if(is_bool($param["Duration"])){
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
            }
        }
        if (array_key_exists("EbsSize",$param) and $param["EbsSize"] !== null) {
            if(is_bool($param["EbsSize"])){
                $this->RequestParams["EbsSize"] = $param["EbsSize"] ? "true" : "false";
            } else {
                $this->RequestParams["EbsSize"] = $param["EbsSize"];
            }
        }
        if (array_key_exists("EbsType",$param) and $param["EbsType"] !== null) {
            if(is_bool($param["EbsType"])){
                $this->RequestParams["EbsType"] = $param["EbsType"] ? "true" : "false";
            } else {
                $this->RequestParams["EbsType"] = $param["EbsType"];
            }
        }
        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            if(is_bool($param["Mem"])){
                $this->RequestParams["Mem"] = $param["Mem"] ? "true" : "false";
            } else {
                $this->RequestParams["Mem"] = $param["Mem"];
            }
        }
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            if(is_bool($param["Cpu"])){
                $this->RequestParams["Cpu"] = $param["Cpu"] ? "true" : "false";
            } else {
                $this->RequestParams["Cpu"] = $param["Cpu"];
            }
        }
        if (array_key_exists("TcpPort",$param) and $param["TcpPort"] !== null) {
            if(is_bool($param["TcpPort"])){
                $this->RequestParams["TcpPort"] = $param["TcpPort"] ? "true" : "false";
            } else {
                $this->RequestParams["TcpPort"] = $param["TcpPort"];
            }
        }
        if (array_key_exists("HttpPort",$param) and $param["HttpPort"] !== null) {
            if(is_bool($param["HttpPort"])){
                $this->RequestParams["HttpPort"] = $param["HttpPort"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpPort"] = $param["HttpPort"];
            }
        }
        if (array_key_exists("Az",$param) and $param["Az"] !== null) {
            if(is_bool($param["Az"])){
                $this->RequestParams["Az"] = $param["Az"] ? "true" : "false";
            } else {
                $this->RequestParams["Az"] = $param["Az"];
            }
        }
        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            if(is_bool($param["NodeNum"])){
                $this->RequestParams["NodeNum"] = $param["NodeNum"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeNum"] = $param["NodeNum"];
            }
        }
        if (array_key_exists("PreferredBackupTime",$param) and $param["PreferredBackupTime"] !== null) {
            if(is_bool($param["PreferredBackupTime"])){
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
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