<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RestoreToSgInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "DBBackupIdentifier" => null,
         /**String**/
        "RestorableTime" => null,
         /**Array**/
        "SrcDatabases" => null,
         /**Array**/
        "DstDatabases" => null,
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
        if (array_key_exists("DBBackupIdentifier",$param) and $param["DBBackupIdentifier"] !== null) {
            if(is_bool($param["DBBackupIdentifier"])){
                $this->RequestParams["DBBackupIdentifier"] = $param["DBBackupIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBBackupIdentifier"] = $param["DBBackupIdentifier"];
            }
        }
        if (array_key_exists("RestorableTime",$param) and $param["RestorableTime"] !== null) {
            if(is_bool($param["RestorableTime"])){
                $this->RequestParams["RestorableTime"] = $param["RestorableTime"] ? "true" : "false";
            } else {
                $this->RequestParams["RestorableTime"] = $param["RestorableTime"];
            }
        }
        if (array_key_exists("SrcDatabases",$param) and $param["SrcDatabases"] !== null) {
            if(is_bool($param["SrcDatabases"])){
                $this->RequestParams["SrcDatabases"] = $param["SrcDatabases"] ? "true" : "false";
            } else {
                $this->RequestParams["SrcDatabases"] = $param["SrcDatabases"];
            }
        }
        if (array_key_exists("DstDatabases",$param) and $param["DstDatabases"] !== null) {
            if(is_bool($param["DstDatabases"])){
                $this->RequestParams["DstDatabases"] = $param["DstDatabases"] ? "true" : "false";
            } else {
                $this->RequestParams["DstDatabases"] = $param["DstDatabases"];
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