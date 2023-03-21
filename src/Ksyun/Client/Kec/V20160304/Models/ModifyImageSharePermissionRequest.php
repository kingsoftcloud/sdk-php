<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyImageSharePermissionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "Permission" => null,
    ];

     /**特殊参数类型:Filter**/
    public $AccountId = [];
 
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
        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $res = $this->formatFilterParams("AccountId",$param["AccountId"]);
            $this->_unserialize("AccountId",$res);
        }
        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            if(is_bool($param["Permission"])){
                $this->RequestParams["Permission"] = $param["Permission"] ? "true" : "false";
            } else {
                $this->RequestParams["Permission"] = $param["Permission"];
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