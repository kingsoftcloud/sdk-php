<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyParamGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NewParamGroupName" => null,
         /**String**/
        "NewDescription" => null,
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
        if (array_key_exists("NewParamGroupName",$param) and $param["NewParamGroupName"] !== null) {
            if(is_bool($param["NewParamGroupName"])){
                $this->RequestParams["NewParamGroupName"] = $param["NewParamGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["NewParamGroupName"] = $param["NewParamGroupName"];
            }
        }
        if (array_key_exists("NewDescription",$param) and $param["NewDescription"] !== null) {
            if(is_bool($param["NewDescription"])){
                $this->RequestParams["NewDescription"] = $param["NewDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["NewDescription"] = $param["NewDescription"];
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