<?php
namespace  Ksyun\Client\Kingpay\V20240501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryCashWalletActionRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "subject" => null,
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
        if (array_key_exists("subject",$param) and $param["subject"] !== null) {
            if(is_bool($param["subject"])){
                $this->RequestParams["subject"] = $param["subject"] ? "true" : "false";
            } else {
                $this->RequestParams["subject"] = $param["subject"];
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