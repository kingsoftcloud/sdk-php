<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySubnetRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SubnetId" => null,
         /**String**/
        "SubnetName" => null,
         /**String**/
        "Dns1" => null,
         /**String**/
        "Dns2" => null,
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            if(is_bool($param["SubnetId"])){
                $this->RequestParams["SubnetId"] = $param["SubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetId"] = $param["SubnetId"];
            }
        }
        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            if(is_bool($param["SubnetName"])){
                $this->RequestParams["SubnetName"] = $param["SubnetName"] ? "true" : "false";
            } else {
                $this->RequestParams["SubnetName"] = $param["SubnetName"];
            }
        }
        if (array_key_exists("Dns1",$param) and $param["Dns1"] !== null) {
            if(is_bool($param["Dns1"])){
                $this->RequestParams["Dns1"] = $param["Dns1"] ? "true" : "false";
            } else {
                $this->RequestParams["Dns1"] = $param["Dns1"];
            }
        }
        if (array_key_exists("Dns2",$param) and $param["Dns2"] !== null) {
            if(is_bool($param["Dns2"])){
                $this->RequestParams["Dns2"] = $param["Dns2"] ? "true" : "false";
            } else {
                $this->RequestParams["Dns2"] = $param["Dns2"];
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