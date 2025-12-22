<?php
namespace  Ksyun\Client\Cloud_advisor\V20250610\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetReportRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "taskIDs" => null,
         /**String**/
        "startTime" => null,
         /**String**/
        "endTime" => null,
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
        if (array_key_exists("taskIDs",$param) and $param["taskIDs"] !== null) {
            if(is_bool($param["taskIDs"])){
                $this->RequestParams["taskIDs"] = $param["taskIDs"] ? "true" : "false";
            } else {
                $this->RequestParams["taskIDs"] = $param["taskIDs"];
            }
        }
        if (array_key_exists("startTime",$param) and $param["startTime"] !== null) {
            if(is_bool($param["startTime"])){
                $this->RequestParams["startTime"] = $param["startTime"] ? "true" : "false";
            } else {
                $this->RequestParams["startTime"] = $param["startTime"];
            }
        }
        if (array_key_exists("endTime",$param) and $param["endTime"] !== null) {
            if(is_bool($param["endTime"])){
                $this->RequestParams["endTime"] = $param["endTime"] ? "true" : "false";
            } else {
                $this->RequestParams["endTime"] = $param["endTime"];
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