<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateNetworkInterfaceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SubnetId" => null,
         /**String**/
        "NetworkInterfaceName" => null,
         /**String**/
        "PrivateIpAddress" => null,
    ];

     /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("NetworkInterfaceName",$param) and $param["NetworkInterfaceName"] !== null) {
            if(is_bool($param["NetworkInterfaceName"])){
                $this->RequestParams["NetworkInterfaceName"] = $param["NetworkInterfaceName"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInterfaceName"] = $param["NetworkInterfaceName"];
            }
        }
        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            if(is_bool($param["PrivateIpAddress"])){
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateIpAddress"] = $param["PrivateIpAddress"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $res = $this->formatFilterParams("SecurityGroupId",$param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId",$res);
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