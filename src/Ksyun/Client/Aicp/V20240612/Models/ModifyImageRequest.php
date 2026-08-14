<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyImageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "ImageName" => null,
         /**String**/
        "ImagePermission" => null,
         /**Array**/
        "AccessList" => null,
         /**Array**/
        "SharedGroupList" => null,
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            if(is_bool($param["ImageName"])){
                $this->RequestParams["ImageName"] = $param["ImageName"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageName"] = $param["ImageName"];
            }
        }
        if (array_key_exists("ImagePermission",$param) and $param["ImagePermission"] !== null) {
            if(is_bool($param["ImagePermission"])){
                $this->RequestParams["ImagePermission"] = $param["ImagePermission"] ? "true" : "false";
            } else {
                $this->RequestParams["ImagePermission"] = $param["ImagePermission"];
            }
        }
        if (array_key_exists("AccessList",$param) and $param["AccessList"] !== null) {
            if(is_bool($param["AccessList"])){
                $this->RequestParams["AccessList"] = $param["AccessList"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessList"] = $param["AccessList"];
            }
        }
        if (array_key_exists("SharedGroupList",$param) and $param["SharedGroupList"] !== null) {
            if(is_bool($param["SharedGroupList"])){
                $this->RequestParams["SharedGroupList"] = $param["SharedGroupList"] ? "true" : "false";
            } else {
                $this->RequestParams["SharedGroupList"] = $param["SharedGroupList"];
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