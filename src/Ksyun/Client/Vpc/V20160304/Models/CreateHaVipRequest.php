<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateHaVipRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SubnetId" => null,
         /**String**/
        "IpAddress" => null,
    ];


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
        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            if(is_bool($param["IpAddress"])){
                $this->RequestParams["IpAddress"] = $param["IpAddress"] ? "true" : "false";
            } else {
                $this->RequestParams["IpAddress"] = $param["IpAddress"];
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