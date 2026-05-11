<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateAccountQuotaRequest extends BaseModel
{
    public $RequestParams = [
         /**Double**/
        "QuotaAmount" => null,
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
        if (array_key_exists("QuotaAmount",$param) and $param["QuotaAmount"] !== null) {
            if(is_bool($param["QuotaAmount"])){
                $this->RequestParams["QuotaAmount"] = $param["QuotaAmount"] ? "true" : "false";
            } else {
                $this->RequestParams["QuotaAmount"] = $param["QuotaAmount"];
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