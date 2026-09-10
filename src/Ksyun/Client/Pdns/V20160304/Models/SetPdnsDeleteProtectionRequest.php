<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetPdnsDeleteProtectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ZoneId" => null,
         /**String**/
        "DeleteProtection" => null,
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
        if (array_key_exists("DeleteProtection",$param) and $param["DeleteProtection"] !== null) {
            if(is_bool($param["DeleteProtection"])){
                $this->RequestParams["DeleteProtection"] = $param["DeleteProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["DeleteProtection"] = $param["DeleteProtection"];
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