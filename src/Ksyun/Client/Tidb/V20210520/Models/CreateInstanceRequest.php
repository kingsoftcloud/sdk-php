<?php

namespace Ksyun\Client\Tidb\V20210520\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInstanceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceName" => null,
        /**String**/
        "EnableModules" => null,
        /**Array**/
        "ModuleConfigs" => null,
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
        /**Int**/
        "BackupConfig.MaxBackups" => null,
        /**Int**/
        "BackupConfig.MaxReservedHours" => null,
        /**String**/
        "BackupConfig.PreferredBackupTime" => null,
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
        if (array_key_exists("InstanceName", $param) and $param["InstanceName"] !== null) {
            if (is_bool($param["InstanceName"])) {
                $this->RequestParams["InstanceName"] = $param["InstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceName"] = $param["InstanceName"];
            }
        }
        if (array_key_exists("EnableModules", $param) and $param["EnableModules"] !== null) {
            if (is_bool($param["EnableModules"])) {
                $this->RequestParams["EnableModules"] = $param["EnableModules"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableModules"] = $param["EnableModules"];
            }
        }
        if (array_key_exists("ModuleConfigs", $param) and $param["ModuleConfigs"] !== null) {
            if (is_bool($param["ModuleConfigs"])) {
                $this->RequestParams["ModuleConfigs"] = $param["ModuleConfigs"] ? "true" : "false";
            } else {
                $this->RequestParams["ModuleConfigs"] = $param["ModuleConfigs"];
            }
        }
        if (array_key_exists("AdminUser", $param) and $param["AdminUser"] !== null) {
            if (is_bool($param["AdminUser"])) {
                $this->RequestParams["AdminUser"] = $param["AdminUser"] ? "true" : "false";
            } else {
                $this->RequestParams["AdminUser"] = $param["AdminUser"];
            }
        }
        if (array_key_exists("AdminPassword", $param) and $param["AdminPassword"] !== null) {
            if (is_bool($param["AdminPassword"])) {
                $this->RequestParams["AdminPassword"] = $param["AdminPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["AdminPassword"] = $param["AdminPassword"];
            }
        }
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("SubnetId", $param) and $param["SubnetId"] !== null) {
            if (is_bool($param["SubnetId"])) {
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("BillType", $param) and $param["BillType"] !== null) {
            if (is_bool($param["BillType"])) {
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
            }
        }
        if (array_key_exists("Duration", $param) and $param["Duration"] !== null) {
            if (is_bool($param["Duration"])) {
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
            }
        }
        if (array_key_exists("ProductType", $param) and $param["ProductType"] !== null) {
            if (is_bool($param["ProductType"])) {
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
            }
        }
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("BackupConfig.MaxBackups", $param) and $param["BackupConfig.MaxBackups"] !== null) {
            if (is_bool($param["BackupConfig.MaxBackups"])) {
                $this->RequestParams["BackupConfig.MaxBackups"] = $param["BackupConfig.MaxBackups"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupConfig.MaxBackups"] = $param["BackupConfig.MaxBackups"];
            }
        }
        if (array_key_exists("BackupConfig.MaxReservedHours", $param) and $param["BackupConfig.MaxReservedHours"] !== null) {
            if (is_bool($param["BackupConfig.MaxReservedHours"])) {
                $this->RequestParams["BackupConfig.MaxReservedHours"] = $param["BackupConfig.MaxReservedHours"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupConfig.MaxReservedHours"] = $param["BackupConfig.MaxReservedHours"];
            }
        }
        if (array_key_exists("BackupConfig.PreferredBackupTime", $param) and $param["BackupConfig.PreferredBackupTime"] !== null) {
            if (is_bool($param["BackupConfig.PreferredBackupTime"])) {
                $this->RequestParams["BackupConfig.PreferredBackupTime"] = $param["BackupConfig.PreferredBackupTime"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupConfig.PreferredBackupTime"] = $param["BackupConfig.PreferredBackupTime"];
            }
        }
        if (array_key_exists("EnableAutoBackup", $param) and $param["EnableAutoBackup"] !== null) {
            if (is_bool($param["EnableAutoBackup"])) {
                $this->RequestParams["EnableAutoBackup"] = $param["EnableAutoBackup"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableAutoBackup"] = $param["EnableAutoBackup"];
            }
        }
        if (array_key_exists("Engine", $param) and $param["Engine"] !== null) {
            if (is_bool($param["Engine"])) {
                $this->RequestParams["Engine"] = $param["Engine"] ? "true" : "false";
            } else {
                $this->RequestParams["Engine"] = $param["Engine"];
            }
        }
        if (array_key_exists("EngineVersion", $param) and $param["EngineVersion"] !== null) {
            if (is_bool($param["EngineVersion"])) {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"];
            }
        }
        if (array_key_exists("ClientPort", $param) and $param["ClientPort"] !== null) {
            if (is_bool($param["ClientPort"])) {
                $this->RequestParams["ClientPort"] = $param["ClientPort"] ? "true" : "false";
            } else {
                $this->RequestParams["ClientPort"] = $param["ClientPort"];
            }
        }
        if (array_key_exists("Az", $param) and $param["Az"] !== null) {
            if (is_bool($param["Az"])) {
                $this->RequestParams["Az"] = $param["Az"] ? "true" : "false";
            } else {
                $this->RequestParams["Az"] = $param["Az"];
            }
        }
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            if (is_bool($param["SecurityGroupId"])) {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}