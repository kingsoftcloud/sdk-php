<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetPdnsModifyProtectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ZoneId" => null,
         /**String**/
        "ModifyProtection" => null,
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            if(is_bool($param["ZoneId"])){
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
            }
        }
        if (array_key_exists("ModifyProtection",$param) and $param["ModifyProtection"] !== null) {
            if(is_bool($param["ModifyProtection"])){
                $this->RequestParams["ModifyProtection"] = $param["ModifyProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["ModifyProtection"] = $param["ModifyProtection"];
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