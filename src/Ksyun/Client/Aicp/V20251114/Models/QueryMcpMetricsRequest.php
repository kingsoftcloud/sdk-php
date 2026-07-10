<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryMcpMetricsRequest extends BaseModel
{
    public $RequestParams = [
         /**Long**/
        "StartTime" => null,
         /**Long**/
        "EndTime" => null,
         /**Int**/
        "Interval" => null,
         /**String**/
        "McpType" => null,
         /**String**/
        "McpServerId" => null,
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            if(is_bool($param["Interval"])){
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("McpType",$param) and $param["McpType"] !== null) {
            if(is_bool($param["McpType"])){
                $this->RequestParams["McpType"] = $param["McpType"] ? "true" : "false";
            } else {
                $this->RequestParams["McpType"] = $param["McpType"];
            }
        }
        if (array_key_exists("McpServerId",$param) and $param["McpServerId"] !== null) {
            if(is_bool($param["McpServerId"])){
                $this->RequestParams["McpServerId"] = $param["McpServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["McpServerId"] = $param["McpServerId"];
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