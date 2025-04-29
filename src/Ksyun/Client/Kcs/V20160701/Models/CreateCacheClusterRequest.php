<?php

namespace Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCacheClusterRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AvailableZone" => null,
        /**String**/
        "Name" => null,
        /**String**/
        "PassWord" => null,
        /**Int**/
        "Mode" => null,
        /**String**/
        "Vip" => null,
        /**Int**/
        "Capacity" => null,
        /**String**/
        "VpcId" => null,
        /**String**/
        "VnetId" => null,
        /**Int**/
        "BillType" => null,
        /**Int**/
        "Duration" => null,
        /**String**/
        "IamProjectId" => null,
        /**String**/
        "Protocol" => null,
        /**String**/
        "BackupTimezone" => null,
        /**String**/
        "SecurityGroupId" => null,
        /**Int**/
        "SlaveNum" => null,
        /**String**/
        "SlaveVip" => null,
        /**String**/
        "PrepareAzName" => null,
        /**String**/
        "RrAzName" => null,
        /**Int**/
        "ShardNum" => null,
        /**Int**/
        "ShardSize" => null,
        /**Int**/
        "Separation" => null,
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
        if (array_key_exists("AvailableZone", $param) and $param["AvailableZone"] !== null) {
            if (is_bool($param["AvailableZone"])) {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"];
            }
        }
        if (array_key_exists("Name", $param) and $param["Name"] !== null) {
            if (is_bool($param["Name"])) {
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("PassWord", $param) and $param["PassWord"] !== null) {
            if (is_bool($param["PassWord"])) {
                $this->RequestParams["PassWord"] = $param["PassWord"] ? "true" : "false";
            } else {
                $this->RequestParams["PassWord"] = $param["PassWord"];
            }
        }
        if (array_key_exists("Mode", $param) and $param["Mode"] !== null) {
            if (is_bool($param["Mode"])) {
                $this->RequestParams["Mode"] = $param["Mode"] ? "true" : "false";
            } else {
                $this->RequestParams["Mode"] = $param["Mode"];
            }
        }
        if (array_key_exists("Vip", $param) and $param["Vip"] !== null) {
            if (is_bool($param["Vip"])) {
                $this->RequestParams["Vip"] = $param["Vip"] ? "true" : "false";
            } else {
                $this->RequestParams["Vip"] = $param["Vip"];
            }
        }
        if (array_key_exists("Capacity", $param) and $param["Capacity"] !== null) {
            if (is_bool($param["Capacity"])) {
                $this->RequestParams["Capacity"] = $param["Capacity"] ? "true" : "false";
            } else {
                $this->RequestParams["Capacity"] = $param["Capacity"];
            }
        }
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("VnetId", $param) and $param["VnetId"] !== null) {
            if (is_bool($param["VnetId"])) {
                $this->RequestParams["VnetId"] = $param["VnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["VnetId"] = $param["VnetId"];
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
        if (array_key_exists("IamProjectId", $param) and $param["IamProjectId"] !== null) {
            if (is_bool($param["IamProjectId"])) {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"];
            }
        }
        if (array_key_exists("Protocol", $param) and $param["Protocol"] !== null) {
            if (is_bool($param["Protocol"])) {
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
            }
        }
        if (array_key_exists("BackupTimezone", $param) and $param["BackupTimezone"] !== null) {
            if (is_bool($param["BackupTimezone"])) {
                $this->RequestParams["BackupTimezone"] = $param["BackupTimezone"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupTimezone"] = $param["BackupTimezone"];
            }
        }
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            if (is_bool($param["SecurityGroupId"])) {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("SlaveNum", $param) and $param["SlaveNum"] !== null) {
            if (is_bool($param["SlaveNum"])) {
                $this->RequestParams["SlaveNum"] = $param["SlaveNum"] ? "true" : "false";
            } else {
                $this->RequestParams["SlaveNum"] = $param["SlaveNum"];
            }
        }
        if (array_key_exists("SlaveVip", $param) and $param["SlaveVip"] !== null) {
            if (is_bool($param["SlaveVip"])) {
                $this->RequestParams["SlaveVip"] = $param["SlaveVip"] ? "true" : "false";
            } else {
                $this->RequestParams["SlaveVip"] = $param["SlaveVip"];
            }
        }
        if (array_key_exists("PrepareAzName", $param) and $param["PrepareAzName"] !== null) {
            if (is_bool($param["PrepareAzName"])) {
                $this->RequestParams["PrepareAzName"] = $param["PrepareAzName"] ? "true" : "false";
            } else {
                $this->RequestParams["PrepareAzName"] = $param["PrepareAzName"];
            }
        }
        if (array_key_exists("RrAzName", $param) and $param["RrAzName"] !== null) {
            if (is_bool($param["RrAzName"])) {
                $this->RequestParams["RrAzName"] = $param["RrAzName"] ? "true" : "false";
            } else {
                $this->RequestParams["RrAzName"] = $param["RrAzName"];
            }
        }
        if (array_key_exists("ShardNum", $param) and $param["ShardNum"] !== null) {
            if (is_bool($param["ShardNum"])) {
                $this->RequestParams["ShardNum"] = $param["ShardNum"] ? "true" : "false";
            } else {
                $this->RequestParams["ShardNum"] = $param["ShardNum"];
            }
        }
        if (array_key_exists("ShardSize", $param) and $param["ShardSize"] !== null) {
            if (is_bool($param["ShardSize"])) {
                $this->RequestParams["ShardSize"] = $param["ShardSize"] ? "true" : "false";
            } else {
                $this->RequestParams["ShardSize"] = $param["ShardSize"];
            }
        }
        if (array_key_exists("Separation", $param) and $param["Separation"] !== null) {
            if (is_bool($param["Separation"])) {
                $this->RequestParams["Separation"] = $param["Separation"] ? "true" : "false";
            } else {
                $this->RequestParams["Separation"] = $param["Separation"];
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