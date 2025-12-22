<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCacheParameterGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailableZone" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "ParamVersion" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Parameters = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ParamVersion",$param) and $param["ParamVersion"] !== null) {
            if(is_bool($param["ParamVersion"])){
                $this->RequestParams["ParamVersion"] = $param["ParamVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["ParamVersion"] = $param["ParamVersion"];
            }
        }
        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $res = $this->formatFilterParams("Parameters",$param["Parameters"]);
            $this->_unserialize("Parameters",$res);
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