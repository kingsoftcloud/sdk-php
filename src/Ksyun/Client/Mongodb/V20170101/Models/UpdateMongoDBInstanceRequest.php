<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateMongoDBInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "InstanceClass" => null,
         /**Int**/
        "Storage" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            if(is_bool($param["InstanceClass"])){
                $this->RequestParams["InstanceClass"] = $param["InstanceClass"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceClass"] = $param["InstanceClass"];
            }
        }
        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            if(is_bool($param["Storage"])){
                $this->RequestParams["Storage"] = $param["Storage"] ? "true" : "false";
            } else {
                $this->RequestParams["Storage"] = $param["Storage"];
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