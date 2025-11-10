<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RestartInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**Array**/
        "InstanceIds" => null,
         /**Int**/
        "Interval" => null,
         /**Boolean**/
        "RollingRestart" => null,
         /**Boolean**/
        "ForceReboot" => null,
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            if(is_bool($param["InstanceIds"])){
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"];
            }
        }
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            if(is_bool($param["Interval"])){
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
            }
        }
        if (array_key_exists("RollingRestart",$param) and $param["RollingRestart"] !== null) {
            if(is_bool($param["RollingRestart"])){
                $this->RequestParams["RollingRestart"] = $param["RollingRestart"] ? "true" : "false";
            } else {
                $this->RequestParams["RollingRestart"] = $param["RollingRestart"];
            }
        }
        if (array_key_exists("ForceReboot",$param) and $param["ForceReboot"] !== null) {
            if(is_bool($param["ForceReboot"])){
                $this->RequestParams["ForceReboot"] = $param["ForceReboot"] ? "true" : "false";
            } else {
                $this->RequestParams["ForceReboot"] = $param["ForceReboot"];
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