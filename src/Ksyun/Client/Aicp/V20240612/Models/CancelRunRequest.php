<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CancelRunRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AgentId" => null,
         /**String**/
        "SessionId" => null,
         /**String**/
        "InvocationId" => null,
         /**String**/
        "ScopeId" => null,
         /**String**/
        "ClientToken" => null,
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            if(is_bool($param["AgentId"])){
                $this->RequestParams["AgentId"] = $param["AgentId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentId"] = $param["AgentId"];
            }
        }
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            if(is_bool($param["SessionId"])){
                $this->RequestParams["SessionId"] = $param["SessionId"] ? "true" : "false";
            } else {
                $this->RequestParams["SessionId"] = $param["SessionId"];
            }
        }
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            if(is_bool($param["InvocationId"])){
                $this->RequestParams["InvocationId"] = $param["InvocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["InvocationId"] = $param["InvocationId"];
            }
        }
        if (array_key_exists("ScopeId",$param) and $param["ScopeId"] !== null) {
            if(is_bool($param["ScopeId"])){
                $this->RequestParams["ScopeId"] = $param["ScopeId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScopeId"] = $param["ScopeId"];
            }
        }
        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            if(is_bool($param["ClientToken"])){
                $this->RequestParams["ClientToken"] = $param["ClientToken"] ? "true" : "false";
            } else {
                $this->RequestParams["ClientToken"] = $param["ClientToken"];
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