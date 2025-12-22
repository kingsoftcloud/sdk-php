<?php
namespace  Ksyun\Client\Dmp\V20240101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ImportInstanceToDmpRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceRegion" => null,
         /**String**/
        "DatabaseType" => null,
         /**String**/
        "InstanceId" => null,
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
        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            if(is_bool($param["InstanceRegion"])){
                $this->RequestParams["InstanceRegion"] = $param["InstanceRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceRegion"] = $param["InstanceRegion"];
            }
        }
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            if(is_bool($param["DatabaseType"])){
                $this->RequestParams["DatabaseType"] = $param["DatabaseType"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseType"] = $param["DatabaseType"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
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