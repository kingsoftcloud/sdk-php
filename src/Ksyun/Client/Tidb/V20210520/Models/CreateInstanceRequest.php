<?php
namespace  Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceName" => null,
         /**String**/
        "EnableModules" => null,
         /**String**/
        "AdminUser" => null,
         /**String**/
        "AdminPassword" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "SubnetId" => null,
         /**Int**/
        "BillType" => null,
         /**String**/
        "Duration" => null,
         /**Int**/
        "ProductType" => null,
         /**String**/
        "ProjectId" => null,
         /**Boolean**/
        "EnableAutoBackup" => null,
         /**String**/
        "Engine" => null,
         /**String**/
        "EngineVersion" => null,
         /**Int**/
        "ClientPort" => null,
         /**String**/
        "Az" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**Object**/
        "BackupConfig" => null,
         /**String**/
        "backupId" => null,
         /**String**/
        "backupRestoreInstanceId" => null,
         /**String**/
        "backupRestoreTime" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ModuleConfigs = [];
 
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
        if (array_key_exists("EnableModules",$param) and $param["EnableModules"] !== null) {
            if(is_bool($param["EnableModules"])){
                $this->RequestParams["EnableModules"] = $param["EnableModules"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableModules"] = $param["EnableModules"];
            }
        }
        if (array_key_exists("ModuleConfigs",$param) and $param["ModuleConfigs"] !== null) {
            $res = $this->formatFilterParams("ModuleConfigs",$param["ModuleConfigs"]);
            $this->_unserialize("ModuleConfigs",$res);
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
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            if(is_bool($param["ProductType"])){
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("EnableAutoBackup",$param) and $param["EnableAutoBackup"] !== null) {
            if(is_bool($param["EnableAutoBackup"])){
                $this->RequestParams["EnableAutoBackup"] = $param["EnableAutoBackup"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableAutoBackup"] = $param["EnableAutoBackup"];
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
        if (array_key_exists("ClientPort",$param) and $param["ClientPort"] !== null) {
            if(is_bool($param["ClientPort"])){
                $this->RequestParams["ClientPort"] = $param["ClientPort"] ? "true" : "false";
            } else {
                $this->RequestParams["ClientPort"] = $param["ClientPort"];
            }
        }
        if (array_key_exists("Az",$param) and $param["Az"] !== null) {
            if(is_bool($param["Az"])){
                $this->RequestParams["Az"] = $param["Az"] ? "true" : "false";
            } else {
                $this->RequestParams["Az"] = $param["Az"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("BackupConfig",$param) and $param["BackupConfig"] !== null) {
            if(is_bool($param["BackupConfig"])){
                $this->RequestParams["BackupConfig"] = $param["BackupConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupConfig"] = $param["BackupConfig"];
            }
        }
        if (array_key_exists("backupId",$param) and $param["backupId"] !== null) {
            if(is_bool($param["backupId"])){
                $this->RequestParams["backupId"] = $param["backupId"] ? "true" : "false";
            } else {
                $this->RequestParams["backupId"] = $param["backupId"];
            }
        }
        if (array_key_exists("backupRestoreInstanceId",$param) and $param["backupRestoreInstanceId"] !== null) {
            if(is_bool($param["backupRestoreInstanceId"])){
                $this->RequestParams["backupRestoreInstanceId"] = $param["backupRestoreInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["backupRestoreInstanceId"] = $param["backupRestoreInstanceId"];
            }
        }
        if (array_key_exists("backupRestoreTime",$param) and $param["backupRestoreTime"] !== null) {
            if(is_bool($param["backupRestoreTime"])){
                $this->RequestParams["backupRestoreTime"] = $param["backupRestoreTime"] ? "true" : "false";
            } else {
                $this->RequestParams["backupRestoreTime"] = $param["backupRestoreTime"];
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