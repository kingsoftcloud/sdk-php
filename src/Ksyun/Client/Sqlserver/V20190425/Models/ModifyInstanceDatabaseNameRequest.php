<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInstanceDatabaseNameRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "InstanceDatabaseName" => null,
         /**String**/
        "InstanceDatabaseNameNew" => null,
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
        if (array_key_exists("InstanceDatabaseName",$param) and $param["InstanceDatabaseName"] !== null) {
            if(is_bool($param["InstanceDatabaseName"])){
                $this->RequestParams["InstanceDatabaseName"] = $param["InstanceDatabaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDatabaseName"] = $param["InstanceDatabaseName"];
            }
        }
        if (array_key_exists("InstanceDatabaseNameNew",$param) and $param["InstanceDatabaseNameNew"] !== null) {
            if(is_bool($param["InstanceDatabaseNameNew"])){
                $this->RequestParams["InstanceDatabaseNameNew"] = $param["InstanceDatabaseNameNew"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDatabaseNameNew"] = $param["InstanceDatabaseNameNew"];
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