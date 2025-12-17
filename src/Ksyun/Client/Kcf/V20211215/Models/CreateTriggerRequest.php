<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTriggerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FunctionId" => null,
         /**String**/
        "TriggerName" => null,
         /**String**/
        "Type" => null,
         /**Boolean**/
        "Enable" => null,
         /**Object**/
        "TriggerDesc" => null,
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
        if (array_key_exists("FunctionId",$param) and $param["FunctionId"] !== null) {
            if(is_bool($param["FunctionId"])){
                $this->RequestParams["FunctionId"] = $param["FunctionId"] ? "true" : "false";
            } else {
                $this->RequestParams["FunctionId"] = $param["FunctionId"];
            }
        }
        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            if(is_bool($param["TriggerName"])){
                $this->RequestParams["TriggerName"] = $param["TriggerName"] ? "true" : "false";
            } else {
                $this->RequestParams["TriggerName"] = $param["TriggerName"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            if(is_bool($param["Enable"])){
                $this->RequestParams["Enable"] = $param["Enable"] ? "true" : "false";
            } else {
                $this->RequestParams["Enable"] = $param["Enable"];
            }
        }
        if (array_key_exists("TriggerDesc",$param) and $param["TriggerDesc"] !== null) {
            if(is_bool($param["TriggerDesc"])){
                $this->RequestParams["TriggerDesc"] = $param["TriggerDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["TriggerDesc"] = $param["TriggerDesc"];
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