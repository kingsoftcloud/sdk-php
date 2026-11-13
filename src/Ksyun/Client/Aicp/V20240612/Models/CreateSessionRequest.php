<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSessionRequest extends BaseModel
{
    public $RequestParams = [
         /**Object**/
        "Tags" => null,
         /**String**/
        "AgentId" => null,
         /**String**/
        "SessionId" => null,
         /**Int**/
        "ExpiresHours" => null,
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            if(is_bool($param["Tags"])){
                $this->RequestParams["Tags"] = $param["Tags"] ? "true" : "false";
            } else {
                $this->RequestParams["Tags"] = $param["Tags"];
            }
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
        if (array_key_exists("ExpiresHours",$param) and $param["ExpiresHours"] !== null) {
            if(is_bool($param["ExpiresHours"])){
                $this->RequestParams["ExpiresHours"] = $param["ExpiresHours"] ? "true" : "false";
            } else {
                $this->RequestParams["ExpiresHours"] = $param["ExpiresHours"];
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