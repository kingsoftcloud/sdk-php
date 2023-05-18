<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class ModifyDnsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NetworkInterfaceId" => null,
         /**String**/
        "HostId" => null,
         /**String**/
        "DNS1" => null,
         /**String**/
        "DNS2" => null,
    ];


    public function __construct()
    {

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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            if(is_bool($param["HostId"])){
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("DNS1",$param) and $param["DNS1"] !== null) {
            if(is_bool($param["DNS1"])){
                $this->RequestParams["DNS1"] = $param["DNS1"] ? "true" : "false";
            } else {
                $this->RequestParams["DNS1"] = $param["DNS1"];
            }
        }
        if (array_key_exists("DNS2",$param) and $param["DNS2"] !== null) {
            if(is_bool($param["DNS2"])){
                $this->RequestParams["DNS2"] = $param["DNS2"] ? "true" : "false";
            } else {
                $this->RequestParams["DNS2"] = $param["DNS2"];
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