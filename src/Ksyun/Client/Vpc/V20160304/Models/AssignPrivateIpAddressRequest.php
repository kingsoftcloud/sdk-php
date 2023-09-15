<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AssignPrivateIpAddressRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NetworkInterfaceId" => null,
         /**Int**/
        "SecondaryPrivateIpAddressCount" => null,
    ];

     /**特殊参数类型:Filter**/
    public $PrivateIpAddress = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            if(is_bool($param["NetworkInterfaceId"])){
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceId"] = $param["NetworkInterfaceId"];
            }
        }
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $res = $this->formatFilterParams("PrivateIpAddress",$param["PrivateIpAddress"]);
            $this->_unserialize("PrivateIpAddress",$res);
        }
        if (array_key_exists("SecondaryPrivateIpAddressCount",$param) and $param["SecondaryPrivateIpAddressCount"] !== null) {
            if(is_bool($param["SecondaryPrivateIpAddressCount"])){
                $this->RequestParams["SecondaryPrivateIpAddressCount"] = $param["SecondaryPrivateIpAddressCount"] ? "true" : "false";
            } else {
                $this->RequestParams["SecondaryPrivateIpAddressCount"] = $param["SecondaryPrivateIpAddressCount"];
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