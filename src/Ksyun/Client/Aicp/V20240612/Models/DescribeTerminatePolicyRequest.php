<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeTerminatePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "QueueId" => null,
         /**String**/
        "CreateUser" => null,
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "Page" => null,
    ];

     /**特殊参数类型:Filter**/
    public $TerminatePolicyId = [];
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
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            if(is_bool($param["QueueId"])){
                $this->RequestParams["QueueId"] = $param["QueueId"] ? "true" : "false";
            } else {
                $this->RequestParams["QueueId"] = $param["QueueId"];
            }
        }
        if (array_key_exists("TerminatePolicyId",$param) and $param["TerminatePolicyId"] !== null) {
            $res = $this->formatFilterParams("TerminatePolicyId",$param["TerminatePolicyId"]);
            $this->_unserialize("TerminatePolicyId",$res);
        }
        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            if(is_bool($param["CreateUser"])){
                $this->RequestParams["CreateUser"] = $param["CreateUser"] ? "true" : "false";
            } else {
                $this->RequestParams["CreateUser"] = $param["CreateUser"];
            }
        }
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter",$param["Filter"]);
            $this->_unserialize("Filter",$res);
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
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