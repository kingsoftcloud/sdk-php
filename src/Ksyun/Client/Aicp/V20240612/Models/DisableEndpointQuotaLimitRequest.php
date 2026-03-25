<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DisableEndpointQuotaLimitRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "EndpointId" => null,
         /**String**/
        "QuotaLimitCycle" => null,
         /**String**/
        "CustomCycle" => null,
         /**String**/
        "QuotaLimitAmount" => null,
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
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            if(is_bool($param["EndpointId"])){
                $this->RequestParams["EndpointId"] = $param["EndpointId"] ? "true" : "false";
            } else {
                $this->RequestParams["EndpointId"] = $param["EndpointId"];
            }
        }
        if (array_key_exists("QuotaLimitCycle",$param) and $param["QuotaLimitCycle"] !== null) {
            if(is_bool($param["QuotaLimitCycle"])){
                $this->RequestParams["QuotaLimitCycle"] = $param["QuotaLimitCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["QuotaLimitCycle"] = $param["QuotaLimitCycle"];
            }
        }
        if (array_key_exists("CustomCycle",$param) and $param["CustomCycle"] !== null) {
            if(is_bool($param["CustomCycle"])){
                $this->RequestParams["CustomCycle"] = $param["CustomCycle"] ? "true" : "false";
            } else {
                $this->RequestParams["CustomCycle"] = $param["CustomCycle"];
            }
        }
        if (array_key_exists("QuotaLimitAmount",$param) and $param["QuotaLimitAmount"] !== null) {
            if(is_bool($param["QuotaLimitAmount"])){
                $this->RequestParams["QuotaLimitAmount"] = $param["QuotaLimitAmount"] ? "true" : "false";
            } else {
                $this->RequestParams["QuotaLimitAmount"] = $param["QuotaLimitAmount"];
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