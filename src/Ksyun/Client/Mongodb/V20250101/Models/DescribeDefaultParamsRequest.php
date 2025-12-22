<?php
namespace  Ksyun\Client\Mongodb\V20250101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDefaultParamsRequest extends BaseModel
{
    public $RequestParams = [
         /**Double**/
        "DbVersion" => null,
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
        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            if(is_bool($param["DbVersion"])){
                $this->RequestParams["DbVersion"] = $param["DbVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["DbVersion"] = $param["DbVersion"];
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