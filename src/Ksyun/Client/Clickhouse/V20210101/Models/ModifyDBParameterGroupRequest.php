<?php
namespace  Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBParameterGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "Parameters" => null,
         /**String**/
        "ConfigType" => null,
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
        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            if(is_bool($param["Parameters"])){
                $this->RequestParams["Parameters"] = $param["Parameters"] ? "true" : "false";
            } else {
                $this->RequestParams["Parameters"] = $param["Parameters"];
            }
        }
        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            if(is_bool($param["ConfigType"])){
                $this->RequestParams["ConfigType"] = $param["ConfigType"] ? "true" : "false";
            } else {
                $this->RequestParams["ConfigType"] = $param["ConfigType"];
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