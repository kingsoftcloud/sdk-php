<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAlbBackendServerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BackendServerId" => null,
         /**Int**/
        "Weight" => null,
         /**Int**/
        "Port" => null,
         /**String**/
        "MasterSlaveType" => null,
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
        if (array_key_exists("BackendServerId",$param) and $param["BackendServerId"] !== null) {
            if(is_bool($param["BackendServerId"])){
                $this->RequestParams["BackendServerId"] = $param["BackendServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerId"] = $param["BackendServerId"];
            }
        }
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            if(is_bool($param["Weight"])){
                $this->RequestParams["Weight"] = $param["Weight"] ? "true" : "false";
            } else {
                $this->RequestParams["Weight"] = $param["Weight"];
            }
        }
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            if(is_bool($param["Port"])){
                $this->RequestParams["Port"] = $param["Port"] ? "true" : "false";
            } else {
                $this->RequestParams["Port"] = $param["Port"];
            }
        }
        if (array_key_exists("MasterSlaveType",$param) and $param["MasterSlaveType"] !== null) {
            if(is_bool($param["MasterSlaveType"])){
                $this->RequestParams["MasterSlaveType"] = $param["MasterSlaveType"] ? "true" : "false";
            } else {
                $this->RequestParams["MasterSlaveType"] = $param["MasterSlaveType"];
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