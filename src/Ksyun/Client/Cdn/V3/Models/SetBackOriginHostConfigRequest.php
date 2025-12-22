<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetBackOriginHostConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "FollowReqDomain" => null,
         /**String**/
        "BackOriginHost" => null,
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
        if (array_key_exists("FollowReqDomain",$param) and $param["FollowReqDomain"] !== null) {
            if(is_bool($param["FollowReqDomain"])){
                $this->RequestParams["FollowReqDomain"] = $param["FollowReqDomain"] ? "true" : "false";
            } else {
                $this->RequestParams["FollowReqDomain"] = $param["FollowReqDomain"];
            }
        }
        if (array_key_exists("BackOriginHost",$param) and $param["BackOriginHost"] !== null) {
            if(is_bool($param["BackOriginHost"])){
                $this->RequestParams["BackOriginHost"] = $param["BackOriginHost"] ? "true" : "false";
            } else {
                $this->RequestParams["BackOriginHost"] = $param["BackOriginHost"];
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