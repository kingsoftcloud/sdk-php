<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class StopInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**Boolean**/
        "ForceStop" => null,
         /**String**/
        "StoppedMode" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $res = $this->formatFilterParams("InstanceId",$param["InstanceId"]);
            $this->_unserialize("InstanceId",$res);
        }
        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            if(is_bool($param["ForceStop"])){
                $this->RequestParams["ForceStop"] = $param["ForceStop"] ? "true" : "false";
            } else {
                $this->RequestParams["ForceStop"] = $param["ForceStop"];
            }
        }
        if (array_key_exists("StoppedMode",$param) and $param["StoppedMode"] !== null) {
            if(is_bool($param["StoppedMode"])){
                $this->RequestParams["StoppedMode"] = $param["StoppedMode"] ? "true" : "false";
            } else {
                $this->RequestParams["StoppedMode"] = $param["StoppedMode"];
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