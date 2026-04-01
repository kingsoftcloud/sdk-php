<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateTerminatePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**String**/
        "QueueId" => null,
         /**String**/
        "TerminatePolicyType" => null,
         /**String**/
        "TerminatePolicyTarget" => null,
         /**Array**/
        "InstanceIds" => null,
         /**Object**/
        "UseRatePolicy" => null,
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("QueueId",$param) and $param["QueueId"] !== null) {
            if(is_bool($param["QueueId"])){
                $this->RequestParams["QueueId"] = $param["QueueId"] ? "true" : "false";
            } else {
                $this->RequestParams["QueueId"] = $param["QueueId"];
            }
        }
        if (array_key_exists("TerminatePolicyType",$param) and $param["TerminatePolicyType"] !== null) {
            if(is_bool($param["TerminatePolicyType"])){
                $this->RequestParams["TerminatePolicyType"] = $param["TerminatePolicyType"] ? "true" : "false";
            } else {
                $this->RequestParams["TerminatePolicyType"] = $param["TerminatePolicyType"];
            }
        }
        if (array_key_exists("TerminatePolicyTarget",$param) and $param["TerminatePolicyTarget"] !== null) {
            if(is_bool($param["TerminatePolicyTarget"])){
                $this->RequestParams["TerminatePolicyTarget"] = $param["TerminatePolicyTarget"] ? "true" : "false";
            } else {
                $this->RequestParams["TerminatePolicyTarget"] = $param["TerminatePolicyTarget"];
            }
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            if(is_bool($param["InstanceIds"])){
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"];
            }
        }
        if (array_key_exists("UseRatePolicy",$param) and $param["UseRatePolicy"] !== null) {
            if(is_bool($param["UseRatePolicy"])){
                $this->RequestParams["UseRatePolicy"] = $param["UseRatePolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["UseRatePolicy"] = $param["UseRatePolicy"];
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