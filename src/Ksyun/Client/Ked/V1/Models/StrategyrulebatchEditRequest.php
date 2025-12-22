<?php
namespace  Ksyun\Client\Ked\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StrategyrulebatchEditRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "securityGroupIds" => null,
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
        if (array_key_exists("securityGroupIds",$param) and $param["securityGroupIds"] !== null) {
            if(is_bool($param["securityGroupIds"])){
                $this->RequestParams["securityGroupIds"] = $param["securityGroupIds"] ? "true" : "false";
            } else {
                $this->RequestParams["securityGroupIds"] = $param["securityGroupIds"];
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