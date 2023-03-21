<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class AttachKeyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceId = [];
      /**特殊参数类型:Filter**/
    public $KeyId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            if(is_bool($param["Action"])){
                $this->RequestParams["Action"] = $param["Action"] ? "true" : "false";
            } else {
                $this->RequestParams["Action"] = $param["Action"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $res = $this->formatFilterParams("InstanceId",$param["InstanceId"]);
            $this->_unserialize("InstanceId",$res);
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $res = $this->formatFilterParams("KeyId",$param["KeyId"]);
            $this->_unserialize("KeyId",$res);
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