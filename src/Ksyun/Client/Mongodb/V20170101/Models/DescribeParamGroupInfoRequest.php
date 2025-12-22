<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeParamGroupInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ParamGroupId" => null,
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
        if (array_key_exists("ParamGroupId",$param) and $param["ParamGroupId"] !== null) {
            if(is_bool($param["ParamGroupId"])){
                $this->RequestParams["ParamGroupId"] = $param["ParamGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ParamGroupId"] = $param["ParamGroupId"];
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