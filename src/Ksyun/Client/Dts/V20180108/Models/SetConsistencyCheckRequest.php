<?php
namespace  Ksyun\Client\Dts\V20180108\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetConsistencyCheckRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TaskId" => null,
         /**Boolean**/
        "ConsistencyCheckAuto" => null,
         /**Int**/
        "ConsistencyCheckCycle" => null,
         /**String**/
        "ConsistencyCheckFixedTime" => null,
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            if(is_bool($param["TaskId"])){
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
            }
        }
        if (array_key_exists("ConsistencyCheckAuto",$param) and $param["ConsistencyCheckAuto"] !== null) {
            if(is_bool($param["ConsistencyCheckAuto"])){
                $this->RequestParams["ConsistencyCheckAuto"] = $param["ConsistencyCheckAuto"] ? "true" : "false";
            } else {
                $this->RequestParams["ConsistencyCheckAuto"] = $param["ConsistencyCheckAuto"];
            }
        }
        if (array_key_exists("ConsistencyCheckCycle",$param) and $param["ConsistencyCheckCycle"] !== null) {
            if(is_bool($param["ConsistencyCheckCycle"])){
                $this->RequestParams["ConsistencyCheckCycle"] = $param["ConsistencyCheckCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["ConsistencyCheckCycle"] = $param["ConsistencyCheckCycle"];
            }
        }
        if (array_key_exists("ConsistencyCheckFixedTime",$param) and $param["ConsistencyCheckFixedTime"] !== null) {
            if(is_bool($param["ConsistencyCheckFixedTime"])){
                $this->RequestParams["ConsistencyCheckFixedTime"] = $param["ConsistencyCheckFixedTime"] ? "true" : "false";
            } else {
                $this->RequestParams["ConsistencyCheckFixedTime"] = $param["ConsistencyCheckFixedTime"];
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