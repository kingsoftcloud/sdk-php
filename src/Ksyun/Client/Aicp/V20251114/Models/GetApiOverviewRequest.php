<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetApiOverviewRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ApiService" => null,
         /**String**/
        "ApiVersion" => null,
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
        if (array_key_exists("ApiService",$param) and $param["ApiService"] !== null) {
            if(is_bool($param["ApiService"])){
                $this->RequestParams["ApiService"] = $param["ApiService"] ? "true" : "false";
            } else {
                $this->RequestParams["ApiService"] = $param["ApiService"];
            }
        }
        if (array_key_exists("ApiVersion",$param) and $param["ApiVersion"] !== null) {
            if(is_bool($param["ApiVersion"])){
                $this->RequestParams["ApiVersion"] = $param["ApiVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["ApiVersion"] = $param["ApiVersion"];
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