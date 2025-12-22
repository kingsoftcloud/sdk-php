<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetLBDeleteProtectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerId" => null,
         /**Boolean**/
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            if(is_bool($param["LoadBalancerId"])){
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"];
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