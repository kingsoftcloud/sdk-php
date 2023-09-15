<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNetworkInterfaceAttributeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NetworkInterfaceId" => null,
         /**String**/
        "HostId" => null,
         /**String**/
        "SubnetId" => null,
         /**String**/
        "IpAddress" => null,
         /**Array**/
        "SecurityGroupIdList" => null,
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            if(is_bool($param["IpAddress"])){
                $this->RequestParams["IpAddress"] = $param["IpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["IpAddress"] = $param["IpAddress"];
            }
        }
        if (array_key_exists("SecurityGroupIdList",$param) and $param["SecurityGroupIdList"] !== null) {
            if(is_bool($param["SecurityGroupIdList"])){
                $this->RequestParams["SecurityGroupIdList"] = $param["SecurityGroupIdList"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupIdList"] = $param["SecurityGroupIdList"];
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