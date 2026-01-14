<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class EnableEndpointRateLimitRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "EndpointId" => null,
         /**Object**/
        "RateLimit" => null,
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
        if (array_key_exists("RateLimit",$param) and $param["RateLimit"] !== null) {
            if(is_bool($param["RateLimit"])){
                $this->RequestParams["RateLimit"] = $param["RateLimit"] ? "true" : "false";
            } else {
                $this->RequestParams["RateLimit"] = $param["RateLimit"];
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