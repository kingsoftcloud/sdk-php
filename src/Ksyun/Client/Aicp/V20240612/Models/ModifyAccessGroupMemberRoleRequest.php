<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAccessGroupMemberRoleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AccessGroupId" => null,
         /**String**/
        "UserId" => null,
         /**String**/
        "Permission" => null,
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
        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            if(is_bool($param["AccessGroupId"])){
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"];
            }
        }
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            if(is_bool($param["UserId"])){
                $this->RequestParams["UserId"] = $param["UserId"] ? "true" : "false";
            } else {
                $this->RequestParams["UserId"] = $param["UserId"];
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