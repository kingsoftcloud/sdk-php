<?php
namespace  Ksyun\Client\Trade\V20250321\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CancelOrderRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "orderId" => null,
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
        if (array_key_exists("orderId",$param) and $param["orderId"] !== null) {
            if(is_bool($param["orderId"])){
                $this->RequestParams["orderId"] = $param["orderId"] ? "true" : "false";
            } else {
                $this->RequestParams["orderId"] = $param["orderId"];
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