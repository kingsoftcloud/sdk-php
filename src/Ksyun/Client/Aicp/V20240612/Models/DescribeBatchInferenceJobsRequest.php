<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeBatchInferenceJobsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "JobNameKeyword" => null,
         /**String**/
        "BatchId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Status = [];
 
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
        if (array_key_exists("JobNameKeyword",$param) and $param["JobNameKeyword"] !== null) {
            if(is_bool($param["JobNameKeyword"])){
                $this->RequestParams["JobNameKeyword"] = $param["JobNameKeyword"] ? "true" : "false";
            } else {
                $this->RequestParams["JobNameKeyword"] = $param["JobNameKeyword"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $res = $this->formatFilterParams("Status",$param["Status"]);
            $this->_unserialize("Status",$res);
        }
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            if(is_bool($param["BatchId"])){
                $this->RequestParams["BatchId"] = $param["BatchId"] ? "true" : "false";
            } else {
                $this->RequestParams["BatchId"] = $param["BatchId"];
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