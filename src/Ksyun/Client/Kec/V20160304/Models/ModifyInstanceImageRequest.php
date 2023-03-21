<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyInstanceImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "SystemDisk" => null,
         /**String**/
        "InstancePassword" => null,
         /**Boolean**/
        "KeepImageLogin" => null,
    ];

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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            if(is_bool($param["SystemDisk"])){
                $this->RequestParams["SystemDisk"] = $param["SystemDisk"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDisk"] = $param["SystemDisk"];
            }
        }
        if (array_key_exists("InstancePassword",$param) and $param["InstancePassword"] !== null) {
            if(is_bool($param["InstancePassword"])){
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancePassword"] = $param["InstancePassword"];
            }
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $res = $this->formatFilterParams("KeyId",$param["KeyId"]);
            $this->_unserialize("KeyId",$res);
        }
        if (array_key_exists("KeepImageLogin",$param) and $param["KeepImageLogin"] !== null) {
            if(is_bool($param["KeepImageLogin"])){
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"] ? "true" : "false";
            } else {
                $this->RequestParams["KeepImageLogin"] = $param["KeepImageLogin"];
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