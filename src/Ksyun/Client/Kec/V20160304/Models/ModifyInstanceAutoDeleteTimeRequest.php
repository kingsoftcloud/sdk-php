<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyInstanceAutoDeleteTimeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AutoDeleteTime" => null,
         /**Boolean**/
        "AutoDeleteEip" => null,
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
        if (array_key_exists("AutoDeleteTime",$param) and $param["AutoDeleteTime"] !== null) {
            if(is_bool($param["AutoDeleteTime"])){
                $this->RequestParams["AutoDeleteTime"] = $param["AutoDeleteTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoDeleteTime"] = $param["AutoDeleteTime"];
            }
        }
        if (array_key_exists("AutoDeleteEip",$param) and $param["AutoDeleteEip"] !== null) {
            if(is_bool($param["AutoDeleteEip"])){
                $this->RequestParams["AutoDeleteEip"] = $param["AutoDeleteEip"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoDeleteEip"] = $param["AutoDeleteEip"];
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