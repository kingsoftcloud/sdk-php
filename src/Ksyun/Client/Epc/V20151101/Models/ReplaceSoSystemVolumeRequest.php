<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ReplaceSoSystemVolumeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "InstanceId" => null,
         /**Boolean**/
        "KeepImageCredential" => null,
         /**String**/
        "KeyPairName" => null,
         /**String**/
        "Password" => null,
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("KeepImageCredential",$param) and $param["KeepImageCredential"] !== null) {
            if(is_bool($param["KeepImageCredential"])){
                $this->RequestParams["KeepImageCredential"] = $param["KeepImageCredential"] ? "true" : "false";
            } else {
                $this->RequestParams["KeepImageCredential"] = $param["KeepImageCredential"];
            }
        }
        if (array_key_exists("KeyPairName",$param) and $param["KeyPairName"] !== null) {
            if(is_bool($param["KeyPairName"])){
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
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