<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBBackupPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "PreferredBackupTime" => null,
         /**String**/
        "IncrementalBackupCycle" => null,
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
        if (array_key_exists("IncrementalBackupCycle",$param) and $param["IncrementalBackupCycle"] !== null) {
            if(is_bool($param["IncrementalBackupCycle"])){
                $this->RequestParams["IncrementalBackupCycle"] = $param["IncrementalBackupCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["IncrementalBackupCycle"] = $param["IncrementalBackupCycle"];
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