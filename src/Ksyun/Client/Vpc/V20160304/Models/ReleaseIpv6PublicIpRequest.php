<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ReleaseIpv6PublicIpRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Ipv6PublicIpAddressId" => null,
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
        if (array_key_exists("Ipv6PublicIpAddressId",$param) and $param["Ipv6PublicIpAddressId"] !== null) {
            if(is_bool($param["Ipv6PublicIpAddressId"])){
                $this->RequestParams["Ipv6PublicIpAddressId"] = $param["Ipv6PublicIpAddressId"] ? "true" : "false";
            } else {
                $this->RequestParams["Ipv6PublicIpAddressId"] = $param["Ipv6PublicIpAddressId"];
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