<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeModelsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "ModelName" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ModelCategory = [];
      /**特殊参数类型:Filter**/
    public $Provider = [];
      /**特殊参数类型:Filter**/
    public $ContextLength = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("ModelCategory",$param) and $param["ModelCategory"] !== null) {
            $res = $this->formatFilterParams("ModelCategory",$param["ModelCategory"]);
            $this->_unserialize("ModelCategory",$res);
        }
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $res = $this->formatFilterParams("Provider",$param["Provider"]);
            $this->_unserialize("Provider",$res);
        }
        if (array_key_exists("ContextLength",$param) and $param["ContextLength"] !== null) {
            $res = $this->formatFilterParams("ContextLength",$param["ContextLength"]);
            $this->_unserialize("ContextLength",$res);
        }
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            if(is_bool($param["ModelName"])){
                $this->RequestParams["ModelName"] = $param["ModelName"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelName"] = $param["ModelName"];
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