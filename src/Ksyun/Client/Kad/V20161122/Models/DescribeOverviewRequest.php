<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeOverviewRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KadId" => null,
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
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
        if (array_key_exists("KadId",$param) and $param["KadId"] !== null) {
            if(is_bool($param["KadId"])){
                $this->RequestParams["KadId"] = $param["KadId"] ? "true" : "false";
            } else {
                $this->RequestParams["KadId"] = $param["KadId"];
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