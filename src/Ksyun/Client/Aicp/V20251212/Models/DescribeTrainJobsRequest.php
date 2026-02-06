<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeTrainJobsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "Page" => null,
         /**String**/
        "TrainJobName" => null,
         /**String**/
        "GPUType" => null,
         /**String**/
        "SortKey" => null,
         /**String**/
        "Sort" => null,
    ];

     /**特殊参数类型:Filter**/
    public $TrainJobId = [];
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
        if (array_key_exists("TrainJobId",$param) and $param["TrainJobId"] !== null) {
            $res = $this->formatFilterParams("TrainJobId",$param["TrainJobId"]);
            $this->_unserialize("TrainJobId",$res);
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
        if (array_key_exists("TrainJobName",$param) and $param["TrainJobName"] !== null) {
            if(is_bool($param["TrainJobName"])){
                $this->RequestParams["TrainJobName"] = $param["TrainJobName"] ? "true" : "false";
            } else {
                $this->RequestParams["TrainJobName"] = $param["TrainJobName"];
            }
        }
        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            if(is_bool($param["GPUType"])){
                $this->RequestParams["GPUType"] = $param["GPUType"] ? "true" : "false";
            } else {
                $this->RequestParams["GPUType"] = $param["GPUType"];
            }
        }
        if (array_key_exists("SortKey",$param) and $param["SortKey"] !== null) {
            if(is_bool($param["SortKey"])){
                $this->RequestParams["SortKey"] = $param["SortKey"] ? "true" : "false";
            } else {
                $this->RequestParams["SortKey"] = $param["SortKey"];
            }
        }
        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            if(is_bool($param["Sort"])){
                $this->RequestParams["Sort"] = $param["Sort"] ? "true" : "false";
            } else {
                $this->RequestParams["Sort"] = $param["Sort"];
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