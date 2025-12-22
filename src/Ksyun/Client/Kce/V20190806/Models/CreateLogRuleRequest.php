<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateLogRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "RuleName" => null,
         /**Object**/
        "InputConfig" => null,
         /**Object**/
        "OutputConfig" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            if(is_bool($param["RuleName"])){
                $this->RequestParams["RuleName"] = $param["RuleName"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleName"] = $param["RuleName"];
            }
        }
        if (array_key_exists("InputConfig",$param) and $param["InputConfig"] !== null) {
            if(is_bool($param["InputConfig"])){
                $this->RequestParams["InputConfig"] = $param["InputConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["InputConfig"] = $param["InputConfig"];
            }
        }
        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            if(is_bool($param["OutputConfig"])){
                $this->RequestParams["OutputConfig"] = $param["OutputConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["OutputConfig"] = $param["OutputConfig"];
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