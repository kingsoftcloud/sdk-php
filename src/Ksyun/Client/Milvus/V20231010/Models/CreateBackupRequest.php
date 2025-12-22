<?php
namespace  Ksyun\Client\Milvus\V20231010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateBackupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "BackupName" => null,
         /**Array**/
        "DBCollection" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            if(is_bool($param["BackupName"])){
                $this->RequestParams["BackupName"] = $param["BackupName"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupName"] = $param["BackupName"];
            }
        }
        if (array_key_exists("DBCollection",$param) and $param["DBCollection"] !== null) {
            if(is_bool($param["DBCollection"])){
                $this->RequestParams["DBCollection"] = $param["DBCollection"] ? "true" : "false";
            } else {
                $this->RequestParams["DBCollection"] = $param["DBCollection"];
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