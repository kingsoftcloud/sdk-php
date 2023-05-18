<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "HostId" => null,
         /**String**/
        "ImageName" => null,
         /**String**/
        "ImageMode" => null,
         /**String**/
        "ImageInitialization" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            if(is_bool($param["HostId"])){
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            if(is_bool($param["ImageName"])){
                $this->RequestParams["ImageName"] = $param["ImageName"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageName"] = $param["ImageName"];
            }
        }
        if (array_key_exists("ImageMode",$param) and $param["ImageMode"] !== null) {
            if(is_bool($param["ImageMode"])){
                $this->RequestParams["ImageMode"] = $param["ImageMode"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageMode"] = $param["ImageMode"];
            }
        }
        if (array_key_exists("ImageInitialization",$param) and $param["ImageInitialization"] !== null) {
            if(is_bool($param["ImageInitialization"])){
                $this->RequestParams["ImageInitialization"] = $param["ImageInitialization"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageInitialization"] = $param["ImageInitialization"];
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