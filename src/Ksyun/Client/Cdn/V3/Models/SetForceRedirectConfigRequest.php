<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetForceRedirectConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "RedirectType" => null,
         /**String**/
        "RedirectCode" => null,
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            if(is_bool($param["DomainId"])){
                $this->RequestParams["DomainId"] = $param["DomainId"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainId"] = $param["DomainId"];
            }
        }
        if (array_key_exists("RedirectType",$param) and $param["RedirectType"] !== null) {
            if(is_bool($param["RedirectType"])){
                $this->RequestParams["RedirectType"] = $param["RedirectType"] ? "true" : "false";
            } else {
                $this->RequestParams["RedirectType"] = $param["RedirectType"];
            }
        }
        if (array_key_exists("RedirectCode",$param) and $param["RedirectCode"] !== null) {
            if(is_bool($param["RedirectCode"])){
                $this->RequestParams["RedirectCode"] = $param["RedirectCode"] ? "true" : "false";
            } else {
                $this->RequestParams["RedirectCode"] = $param["RedirectCode"];
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