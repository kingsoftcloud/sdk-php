<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RegisterBackendServerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BackendServerGroupId" => null,
         /**String**/
        "BackendServerIp" => null,
         /**Int**/
        "BackendServerPort" => null,
         /**Int**/
        "Weight" => null,
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
        if (array_key_exists("BackendServerGroupId",$param) and $param["BackendServerGroupId"] !== null) {
            if(is_bool($param["BackendServerGroupId"])){
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"];
            }
        }
        if (array_key_exists("BackendServerIp",$param) and $param["BackendServerIp"] !== null) {
            if(is_bool($param["BackendServerIp"])){
                $this->RequestParams["BackendServerIp"] = $param["BackendServerIp"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerIp"] = $param["BackendServerIp"];
            }
        }
        if (array_key_exists("BackendServerPort",$param) and $param["BackendServerPort"] !== null) {
            if(is_bool($param["BackendServerPort"])){
                $this->RequestParams["BackendServerPort"] = $param["BackendServerPort"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerPort"] = $param["BackendServerPort"];
            }
        }
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            if(is_bool($param["Weight"])){
                $this->RequestParams["Weight"] = $param["Weight"] ? "true" : "false";
            } else {
                $this->RequestParams["Weight"] = $param["Weight"];
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