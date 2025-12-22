<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAvailabilityZonesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VolumeType" => null,
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
        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            if(is_bool($param["VolumeType"])){
                $this->RequestParams["VolumeType"] = $param["VolumeType"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeType"] = $param["VolumeType"];
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