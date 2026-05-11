<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAiLogDetailByIdsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "MessageIds" => null,
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
        if (array_key_exists("MessageIds",$param) and $param["MessageIds"] !== null) {
            if(is_bool($param["MessageIds"])){
                $this->RequestParams["MessageIds"] = $param["MessageIds"] ? "true" : "false";
            } else {
                $this->RequestParams["MessageIds"] = $param["MessageIds"];
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