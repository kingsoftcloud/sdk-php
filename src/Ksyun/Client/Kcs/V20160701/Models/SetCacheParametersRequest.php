<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetCacheParametersRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailableZone" => null,
         /**String**/
        "CacheId" => null,
         /**String**/
        "Protocol" => null,
         /**Boolean**/
        "ResetAllParameters" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Parameters_ParameterName = [];
      /**特殊参数类型:Filter**/
    public $Parameters_ParameterValue = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AvailableZone",$param) and $param["AvailableZone"] !== null) {
            if(is_bool($param["AvailableZone"])){
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"];
            }
        }
        if (array_key_exists("CacheId",$param) and $param["CacheId"] !== null) {
            if(is_bool($param["CacheId"])){
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            if(is_bool($param["Protocol"])){
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
            }
        }
        if (array_key_exists("Parameters.ParameterName",$param) and $param["Parameters.ParameterName"] !== null) {
            $res = $this->formatFilterParams("Parameters.ParameterName",$param["Parameters.ParameterName"]);
            $this->_unserialize("Parameters.ParameterName",$res);
        }
        if (array_key_exists("Parameters.ParameterValue",$param) and $param["Parameters.ParameterValue"] !== null) {
            $res = $this->formatFilterParams("Parameters.ParameterValue",$param["Parameters.ParameterValue"]);
            $this->_unserialize("Parameters.ParameterValue",$res);
        }
        if (array_key_exists("ResetAllParameters",$param) and $param["ResetAllParameters"] !== null) {
            if(is_bool($param["ResetAllParameters"])){
                $this->RequestParams["ResetAllParameters"] = $param["ResetAllParameters"] ? "true" : "false";
            } else {
                $this->RequestParams["ResetAllParameters"] = $param["ResetAllParameters"];
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