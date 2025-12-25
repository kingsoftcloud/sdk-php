<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetHttpHeadersConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "HeaderKey" => null,
         /**String**/
        "HeaderValue" => null,
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            if(is_bool($param["DomainId"])){
                $this->RequestParams["DomainId"] = $param["DomainId"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainId"] = $param["DomainId"];
            }
        }
        if (array_key_exists("HeaderKey",$param) and $param["HeaderKey"] !== null) {
            if(is_bool($param["HeaderKey"])){
                $this->RequestParams["HeaderKey"] = $param["HeaderKey"] ? "true" : "false";
            } else {
                $this->RequestParams["HeaderKey"] = $param["HeaderKey"];
            }
        }
        if (array_key_exists("HeaderValue",$param) and $param["HeaderValue"] !== null) {
            if(is_bool($param["HeaderValue"])){
                $this->RequestParams["HeaderValue"] = $param["HeaderValue"] ? "true" : "false";
            } else {
                $this->RequestParams["HeaderValue"] = $param["HeaderValue"];
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