<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyImageAttributeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "OsVersion" => null,
         /**Boolean**/
        "CloudInitSupport" => null,
    ];


    public function __construct()
    {

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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            if(is_bool($param["OsVersion"])){
                $this->RequestParams["OsVersion"] = $param["OsVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["OsVersion"] = $param["OsVersion"];
            }
        }
        if (array_key_exists("CloudInitSupport",$param) and $param["CloudInitSupport"] !== null) {
            if(is_bool($param["CloudInitSupport"])){
                $this->RequestParams["CloudInitSupport"] = $param["CloudInitSupport"] ? "true" : "false";
            } else {
                $this->RequestParams["CloudInitSupport"] = $param["CloudInitSupport"];
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