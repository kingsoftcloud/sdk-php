<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyImageAccessRoleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "KsyunUserId" => null,
         /**String**/
        "SharedGroupId" => null,
         /**String**/
        "Permission" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
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
        if (array_key_exists("KsyunUserId",$param) and $param["KsyunUserId"] !== null) {
            if(is_bool($param["KsyunUserId"])){
                $this->RequestParams["KsyunUserId"] = $param["KsyunUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["KsyunUserId"] = $param["KsyunUserId"];
            }
        }
        if (array_key_exists("SharedGroupId",$param) and $param["SharedGroupId"] !== null) {
            if(is_bool($param["SharedGroupId"])){
                $this->RequestParams["SharedGroupId"] = $param["SharedGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SharedGroupId"] = $param["SharedGroupId"];
            }
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