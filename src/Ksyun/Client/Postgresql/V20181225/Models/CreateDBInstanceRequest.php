<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDBInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "Mem" => null,
         /**Int**/
        "Disk" => null,
         /**String**/
        "DBInstanceName" => null,
         /**String**/
        "Engine" => null,
         /**String**/
        "EngineVersion" => null,
         /**String**/
        "MasterUserPassword" => null,
         /**String**/
        "MasterUserName" => null,
         /**String**/
        "DBInstanceType" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "PreferredBackupTime" => null,
         /**String**/
        "DBParameterGroupId" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "Port" => null,
         /**String**/
        "BillType" => null,
         /**String**/
        "Duration" => null,
         /**String**/
        "DurationUnit" => null,
         /**String**/
        "ProjectId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $AvailabilityZone = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            if(is_bool($param["Mem"])){
                $this->RequestParams["Mem"] = $param["Mem"] ? "true" : "false";
            } else {
                $this->RequestParams["Mem"] = $param["Mem"];
            }
        }
        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            if(is_bool($param["Disk"])){
                $this->RequestParams["Disk"] = $param["Disk"] ? "true" : "false";
            } else {
                $this->RequestParams["Disk"] = $param["Disk"];
            }
        }
        if (array_key_exists("DBInstanceName",$param) and $param["DBInstanceName"] !== null) {
            if(is_bool($param["DBInstanceName"])){
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"];
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
        if (array_key_exists("MasterUserPassword",$param) and $param["MasterUserPassword"] !== null) {
            if(is_bool($param["MasterUserPassword"])){
                $this->RequestParams["MasterUserPassword"] = $param["MasterUserPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["MasterUserPassword"] = $param["MasterUserPassword"];
            }
        }
        if (array_key_exists("MasterUserName",$param) and $param["MasterUserName"] !== null) {
            if(is_bool($param["MasterUserName"])){
                $this->RequestParams["MasterUserName"] = $param["MasterUserName"] ? "true" : "false";
            } else {
                $this->RequestParams["MasterUserName"] = $param["MasterUserName"];
            }
        }
        if (array_key_exists("DBInstanceType",$param) and $param["DBInstanceType"] !== null) {
            if(is_bool($param["DBInstanceType"])){
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceType"] = $param["DBInstanceType"];
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
        if (array_key_exists("PreferredBackupTime",$param) and $param["PreferredBackupTime"] !== null) {
            if(is_bool($param["PreferredBackupTime"])){
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"];
            }
        }
        if (array_key_exists("DBParameterGroupId",$param) and $param["DBParameterGroupId"] !== null) {
            if(is_bool($param["DBParameterGroupId"])){
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            if(is_bool($param["Port"])){
                $this->RequestParams["Port"] = $param["Port"] ? "true" : "false";
            } else {
                $this->RequestParams["Port"] = $param["Port"];
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
        if (array_key_exists("DurationUnit",$param) and $param["DurationUnit"] !== null) {
            if(is_bool($param["DurationUnit"])){
                $this->RequestParams["DurationUnit"] = $param["DurationUnit"] ? "true" : "false";
            } else {
                $this->RequestParams["DurationUnit"] = $param["DurationUnit"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            $res = $this->formatFilterParams("AvailabilityZone",$param["AvailabilityZone"]);
            $this->_unserialize("AvailabilityZone",$res);
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