<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeResourcePoolsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Sort" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
         /**String**/
        "ResourcePoolName" => null,
         /**String**/
        "Component" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ResourcePoolId = [];
      /**特殊参数类型:Filter**/
    public $Filter = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            if(is_bool($param["Sort"])){
                $this->RequestParams["Sort"] = $param["Sort"] ? "true" : "false";
            } else {
                $this->RequestParams["Sort"] = $param["Sort"];
            }
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("ResourcePoolName",$param) and $param["ResourcePoolName"] !== null) {
            if(is_bool($param["ResourcePoolName"])){
                $this->RequestParams["ResourcePoolName"] = $param["ResourcePoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolName"] = $param["ResourcePoolName"];
            }
        }
        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            if(is_bool($param["Component"])){
                $this->RequestParams["Component"] = $param["Component"] ? "true" : "false";
            } else {
                $this->RequestParams["Component"] = $param["Component"];
            }
        }
        if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
            $res = $this->formatFilterParams("ResourcePoolId",$param["ResourcePoolId"]);
            $this->_unserialize("ResourcePoolId",$res);
        }
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter",$param["Filter"]);
            $this->_unserialize("Filter",$res);
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