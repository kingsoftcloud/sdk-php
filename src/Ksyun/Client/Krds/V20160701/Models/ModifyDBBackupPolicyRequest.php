<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBBackupPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "PreferredBackupTime" => null,
         /**Int**/
        "ExpireAfter" => null,
         /**String**/
        "IncrementalBackupCycle" => null,
         /**String**/
        "FullBackupCycle" => null,
         /**Int**/
        "BinlogExpireAfter" => null,
         /**Boolean**/
        "HighFrequencyBackup" => null,
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
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("PreferredBackupTime",$param) and $param["PreferredBackupTime"] !== null) {
            if(is_bool($param["PreferredBackupTime"])){
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"];
            }
        }
        if (array_key_exists("ExpireAfter",$param) and $param["ExpireAfter"] !== null) {
            if(is_bool($param["ExpireAfter"])){
                $this->RequestParams["ExpireAfter"] = $param["ExpireAfter"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpireAfter"] = $param["ExpireAfter"];
            }
        }
        if (array_key_exists("IncrementalBackupCycle",$param) and $param["IncrementalBackupCycle"] !== null) {
            if(is_bool($param["IncrementalBackupCycle"])){
                $this->RequestParams["IncrementalBackupCycle"] = $param["IncrementalBackupCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["IncrementalBackupCycle"] = $param["IncrementalBackupCycle"];
            }
        }
        if (array_key_exists("FullBackupCycle",$param) and $param["FullBackupCycle"] !== null) {
            if(is_bool($param["FullBackupCycle"])){
                $this->RequestParams["FullBackupCycle"] = $param["FullBackupCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["FullBackupCycle"] = $param["FullBackupCycle"];
            }
        }
        if (array_key_exists("BinlogExpireAfter",$param) and $param["BinlogExpireAfter"] !== null) {
            if(is_bool($param["BinlogExpireAfter"])){
                $this->RequestParams["BinlogExpireAfter"] = $param["BinlogExpireAfter"] ? "true" : "false";
            } else {
                $this->RequestParams["BinlogExpireAfter"] = $param["BinlogExpireAfter"];
            }
        }
        if (array_key_exists("HighFrequencyBackup",$param) and $param["HighFrequencyBackup"] !== null) {
            if(is_bool($param["HighFrequencyBackup"])){
                $this->RequestParams["HighFrequencyBackup"] = $param["HighFrequencyBackup"] ? "true" : "false";
            } else {
                $this->RequestParams["HighFrequencyBackup"] = $param["HighFrequencyBackup"];
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