<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CenCidrPublishRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NetworkInstanceId" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "CenId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $NetworkRouteId = [];
      /**特殊参数类型:Filter**/
    public $SelfDefineCidr = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            if(is_bool($param["NetworkInstanceId"])){
                $this->RequestParams["NetworkInstanceId"] = $param["NetworkInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInstanceId"] = $param["NetworkInstanceId"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("NetworkRouteId",$param) and $param["NetworkRouteId"] !== null) {
            $res = $this->formatFilterParams("NetworkRouteId",$param["NetworkRouteId"]);
            $this->_unserialize("NetworkRouteId",$res);
        }
        if (array_key_exists("SelfDefineCidr",$param) and $param["SelfDefineCidr"] !== null) {
            $res = $this->formatFilterParams("SelfDefineCidr",$param["SelfDefineCidr"]);
            $this->_unserialize("SelfDefineCidr",$res);
        }
        if (array_key_exists("CenId",$param) and $param["CenId"] !== null) {
            if(is_bool($param["CenId"])){
                $this->RequestParams["CenId"] = $param["CenId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenId"] = $param["CenId"];
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