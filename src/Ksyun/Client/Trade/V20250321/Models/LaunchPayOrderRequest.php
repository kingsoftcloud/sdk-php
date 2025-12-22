<?php
namespace  Ksyun\Client\Trade\V20250321\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class LaunchPayOrderRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "OrderId" => null,
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            if(is_bool($param["OrderId"])){
                $this->RequestParams["OrderId"] = $param["OrderId"] ? "true" : "false";
            } else {
                $this->RequestParams["OrderId"] = $param["OrderId"];
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