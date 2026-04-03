<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class PutDefaultEventPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PolicyName" => null,
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
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            if(is_bool($param["PolicyName"])){
                $this->RequestParams["PolicyName"] = $param["PolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyName"] = $param["PolicyName"];
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