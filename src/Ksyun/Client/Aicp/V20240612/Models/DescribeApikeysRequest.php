<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeApikeysRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "Namekeyword" => null,
         /**Boolean**/
        "DefaultKey" => null,
    ];

     /**特殊参数类型:Filter**/
    public $AssociatedModelId = [];
      /**特殊参数类型:Filter**/
    public $Status = [];
      /**特殊参数类型:Filter**/
    public $KeyId = [];
 
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
        if (array_key_exists("AssociatedModelId",$param) and $param["AssociatedModelId"] !== null) {
            $res = $this->formatFilterParams("AssociatedModelId",$param["AssociatedModelId"]);
            $this->_unserialize("AssociatedModelId",$res);
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $res = $this->formatFilterParams("Status",$param["Status"]);
            $this->_unserialize("Status",$res);
        }
        if (array_key_exists("Namekeyword",$param) and $param["Namekeyword"] !== null) {
            if(is_bool($param["Namekeyword"])){
                $this->RequestParams["Namekeyword"] = $param["Namekeyword"] ? "true" : "false";
            } else {
                $this->RequestParams["Namekeyword"] = $param["Namekeyword"];
            }
        }
        if (array_key_exists("DefaultKey",$param) and $param["DefaultKey"] !== null) {
            if(is_bool($param["DefaultKey"])){
                $this->RequestParams["DefaultKey"] = $param["DefaultKey"] ? "true" : "false";
            } else {
                $this->RequestParams["DefaultKey"] = $param["DefaultKey"];
            }
        }
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $res = $this->formatFilterParams("KeyId",$param["KeyId"]);
            $this->_unserialize("KeyId",$res);
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