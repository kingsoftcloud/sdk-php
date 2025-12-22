<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateParamGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ParamGroupName" => null,
         /**String**/
        "Description" => null,
         /**Double**/
        "DbVersion" => null,
         /**String**/
        "Params" => null,
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
        if (array_key_exists("ParamGroupName",$param) and $param["ParamGroupName"] !== null) {
            if(is_bool($param["ParamGroupName"])){
                $this->RequestParams["ParamGroupName"] = $param["ParamGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["ParamGroupName"] = $param["ParamGroupName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            if(is_bool($param["DbVersion"])){
                $this->RequestParams["DbVersion"] = $param["DbVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["DbVersion"] = $param["DbVersion"];
            }
        }
        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            if(is_bool($param["Params"])){
                $this->RequestParams["Params"] = $param["Params"] ? "true" : "false";
            } else {
                $this->RequestParams["Params"] = $param["Params"];
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