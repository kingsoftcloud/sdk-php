<?php
namespace  Ksyun\Client\Trade\V20250220\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTrialToBuyNowRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "instanceId" => null,
         /**Int**/
        "billType" => null,
         /**Int**/
        "duration" => null,
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
        if (array_key_exists("instanceId",$param) and $param["instanceId"] !== null) {
            if(is_bool($param["instanceId"])){
                $this->RequestParams["instanceId"] = $param["instanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceId"] = $param["instanceId"];
            }
        }
        if (array_key_exists("billType",$param) and $param["billType"] !== null) {
            if(is_bool($param["billType"])){
                $this->RequestParams["billType"] = $param["billType"] ? "true" : "false";
            } else {
                $this->RequestParams["billType"] = $param["billType"];
            }
        }
        if (array_key_exists("duration",$param) and $param["duration"] !== null) {
            if(is_bool($param["duration"])){
                $this->RequestParams["duration"] = $param["duration"] ? "true" : "false";
            } else {
                $this->RequestParams["duration"] = $param["duration"];
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