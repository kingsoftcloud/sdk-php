<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSoInstanceTypesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ImageId" => null,
         /**String**/
        "SoZoneId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceTypeId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            if(is_bool($param["ImageId"])){
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("InstanceTypeId",$param) and $param["InstanceTypeId"] !== null) {
            $res = $this->formatFilterParams("InstanceTypeId",$param["InstanceTypeId"]);
            $this->_unserialize("InstanceTypeId",$res);
        }
        if (array_key_exists("SoZoneId",$param) and $param["SoZoneId"] !== null) {
            if(is_bool($param["SoZoneId"])){
                $this->RequestParams["SoZoneId"] = $param["SoZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["SoZoneId"] = $param["SoZoneId"];
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