<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyModelAccessRoleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ModelId" => null,
         /**String**/
        "UserId" => null,
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            if(is_bool($param["ModelId"])){
                $this->RequestParams["ModelId"] = $param["ModelId"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelId"] = $param["ModelId"];
            }
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            if(is_bool($param["UserId"])){
                $this->RequestParams["UserId"] = $param["UserId"] ? "true" : "false";
            } else {
                $this->RequestParams["UserId"] = $param["UserId"];
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