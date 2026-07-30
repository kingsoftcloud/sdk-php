<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateUsageDownloadTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**Long**/
        "StartTimestamp" => null,
         /**Long**/
        "EndTimestamp" => null,
         /**Object**/
        "Filter" => null,
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
        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            if(is_bool($param["StartTimestamp"])){
                $this->RequestParams["StartTimestamp"] = $param["StartTimestamp"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTimestamp"] = $param["StartTimestamp"];
            }
        }
        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            if(is_bool($param["EndTimestamp"])){
                $this->RequestParams["EndTimestamp"] = $param["EndTimestamp"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTimestamp"] = $param["EndTimestamp"];
            }
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