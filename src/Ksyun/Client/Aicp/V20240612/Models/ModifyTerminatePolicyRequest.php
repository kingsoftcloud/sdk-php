<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyTerminatePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**Array**/
        "InstanceIds" => null,
         /**Object**/
        "UseRatePolicy" => null,
         /**String**/
        "TerminatePolicyId" => null,
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
        if (array_key_exists("TerminatePolicyId",$param) and $param["TerminatePolicyId"] !== null) {
            if(is_bool($param["TerminatePolicyId"])){
                $this->RequestParams["TerminatePolicyId"] = $param["TerminatePolicyId"] ? "true" : "false";
            } else {
                $this->RequestParams["TerminatePolicyId"] = $param["TerminatePolicyId"];
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