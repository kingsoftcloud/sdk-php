<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeTerminateStopRecordsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "QueueId" => null,
         /**Array**/
        "TerminatePolicyIds" => null,
         /**Array**/
        "NotebookIds" => null,
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
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
        if (array_key_exists("TerminatePolicyIds",$param) and $param["TerminatePolicyIds"] !== null) {
            if(is_bool($param["TerminatePolicyIds"])){
                $this->RequestParams["TerminatePolicyIds"] = $param["TerminatePolicyIds"] ? "true" : "false";
            } else {
                $this->RequestParams["TerminatePolicyIds"] = $param["TerminatePolicyIds"];
            }
        }
        if (array_key_exists("NotebookIds",$param) and $param["NotebookIds"] !== null) {
            if(is_bool($param["NotebookIds"])){
                $this->RequestParams["NotebookIds"] = $param["NotebookIds"] ? "true" : "false";
            } else {
                $this->RequestParams["NotebookIds"] = $param["NotebookIds"];
            }
        }
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            if(is_bool($param["EndTime"])){
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
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