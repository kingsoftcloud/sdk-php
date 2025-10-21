<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySoImageAttributeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BootMode" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "ImageId" => null,
         /**String**/
        "ImageName" => null,
         /**String**/
        "SoZoneId" => null,
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
        if (array_key_exists("BootMode",$param) and $param["BootMode"] !== null) {
            if(is_bool($param["BootMode"])){
                $this->RequestParams["BootMode"] = $param["BootMode"] ? "true" : "false";
            } else {
                $this->RequestParams["BootMode"] = $param["BootMode"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            if(is_bool($param["ImageName"])){
                $this->RequestParams["ImageName"] = $param["ImageName"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageName"] = $param["ImageName"];
            }
        }
        if (array_key_exists("SoZoneId",$param) and $param["SoZoneId"] !== null) {
            if(is_bool($param["SoZoneId"])){
                $this->RequestParams["SoZoneId"] = $param["SoZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["SoZoneId"] = $param["SoZoneId"];
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