<?php
namespace  Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeEngineDefaultParametersRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "EngineVersion" => null,
         /**String**/
        "ConfigType" => null,
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
        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            if(is_bool($param["EngineVersion"])){
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"];
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