<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeInferenceEndpointsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "EndpointName" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
         /**Array**/
        "Filter" => null,
    ];

     /**特殊参数类型:Filter**/
    public $EndpointId = [];
      /**特殊参数类型:Filter**/
    public $ProjectId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $res = $this->formatFilterParams("EndpointId",$param["EndpointId"]);
            $this->_unserialize("EndpointId",$res);
        }
        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            if(is_bool($param["EndpointName"])){
                $this->RequestParams["EndpointName"] = $param["EndpointName"] ? "true" : "false";
            } else {
                $this->RequestParams["EndpointName"] = $param["EndpointName"];
            }
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId",$param["ProjectId"]);
            $this->_unserialize("ProjectId",$res);
        }
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            if(is_bool($param["Filter"])){
                $this->RequestParams["Filter"] = $param["Filter"] ? "true" : "false";
            } else {
                $this->RequestParams["Filter"] = $param["Filter"];
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