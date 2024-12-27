<?php
namespace  Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ServiceControlRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "ControlType" => null,
         /**String**/
        "Rolling" => null,
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
        if (array_key_exists("ControlType",$param) and $param["ControlType"] !== null) {
            if(is_bool($param["ControlType"])){
                $this->RequestParams["ControlType"] = $param["ControlType"] ? "true" : "false";
            } else {
                $this->RequestParams["ControlType"] = $param["ControlType"];
            }
        }
        if (array_key_exists("Rolling",$param) and $param["Rolling"] !== null) {
            if(is_bool($param["Rolling"])){
                $this->RequestParams["Rolling"] = $param["Rolling"] ? "true" : "false";
            } else {
                $this->RequestParams["Rolling"] = $param["Rolling"];
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