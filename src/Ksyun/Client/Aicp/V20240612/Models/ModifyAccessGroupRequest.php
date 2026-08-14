<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAccessGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AccessGroupId" => null,
         /**String**/
        "AccessGroupName" => null,
         /**String**/
        "AccessGroupDescription" => null,
         /**Array**/
        "Users" => null,
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
        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            if(is_bool($param["AccessGroupId"])){
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"];
            }
        }
        if (array_key_exists("AccessGroupName",$param) and $param["AccessGroupName"] !== null) {
            if(is_bool($param["AccessGroupName"])){
                $this->RequestParams["AccessGroupName"] = $param["AccessGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessGroupName"] = $param["AccessGroupName"];
            }
        }
        if (array_key_exists("AccessGroupDescription",$param) and $param["AccessGroupDescription"] !== null) {
            if(is_bool($param["AccessGroupDescription"])){
                $this->RequestParams["AccessGroupDescription"] = $param["AccessGroupDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessGroupDescription"] = $param["AccessGroupDescription"];
            }
        }
        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            if(is_bool($param["Users"])){
                $this->RequestParams["Users"] = $param["Users"] ? "true" : "false";
            } else {
                $this->RequestParams["Users"] = $param["Users"];
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