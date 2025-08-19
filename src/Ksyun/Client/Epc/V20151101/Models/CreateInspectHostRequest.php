<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateInspectHostRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InspectType" => null,
         /**String**/
        "InspectName" => null,
    ];

     /**特殊参数类型:Filter**/
    public $HostId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InspectType",$param) and $param["InspectType"] !== null) {
            if(is_bool($param["InspectType"])){
                $this->RequestParams["InspectType"] = $param["InspectType"] ? "true" : "false";
            } else {
                $this->RequestParams["InspectType"] = $param["InspectType"];
            }
        }
        if (array_key_exists("InspectName",$param) and $param["InspectName"] !== null) {
            if(is_bool($param["InspectName"])){
                $this->RequestParams["InspectName"] = $param["InspectName"] ? "true" : "false";
            } else {
                $this->RequestParams["InspectName"] = $param["InspectName"];
            }
        }
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $res = $this->formatFilterParams("HostId",$param["HostId"]);
            $this->_unserialize("HostId",$res);
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