<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBInstanceExtensionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "InstanceDatabaseName" => null,
         /**String**/
        "Operation" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Extension = [];
 
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            if(is_bool($param["Operation"])){
                $this->RequestParams["Operation"] = $param["Operation"] ? "true" : "false";
            } else {
                $this->RequestParams["Operation"] = $param["Operation"];
            }
        }
        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $res = $this->formatFilterParams("Extension",$param["Extension"]);
            $this->_unserialize("Extension",$res);
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