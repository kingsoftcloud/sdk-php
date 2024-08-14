<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteNatRateLimitRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NatRateLimitId" => null,
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
        if (array_key_exists("NatRateLimitId",$param) and $param["NatRateLimitId"] !== null) {
            if(is_bool($param["NatRateLimitId"])){
                $this->RequestParams["NatRateLimitId"] = $param["NatRateLimitId"] ? "true" : "false";
            } else {
                $this->RequestParams["NatRateLimitId"] = $param["NatRateLimitId"];
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