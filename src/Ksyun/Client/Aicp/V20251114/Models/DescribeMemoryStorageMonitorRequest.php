<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeMemoryStorageMonitorRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "MemoryId" => null,
         /**Long**/
        "StartTime" => null,
         /**Long**/
        "EndTime" => null,
         /**String**/
        "Granularity" => null,
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
        if (array_key_exists("MemoryId",$param) and $param["MemoryId"] !== null) {
            if(is_bool($param["MemoryId"])){
                $this->RequestParams["MemoryId"] = $param["MemoryId"] ? "true" : "false";
            } else {
                $this->RequestParams["MemoryId"] = $param["MemoryId"];
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
        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            if(is_bool($param["Granularity"])){
                $this->RequestParams["Granularity"] = $param["Granularity"] ? "true" : "false";
            } else {
                $this->RequestParams["Granularity"] = $param["Granularity"];
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