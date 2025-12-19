<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class InstallAgentRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "HostId" => null,
         /**String**/
        "AgentId" => null,
         /**String**/
        "Username" => null,
         /**String**/
        "Password" => null,
         /**String**/
        "Key" => null,
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            if(is_bool($param["HostId"])){
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            if(is_bool($param["AgentId"])){
                $this->RequestParams["AgentId"] = $param["AgentId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentId"] = $param["AgentId"];
            }
        }
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            if(is_bool($param["Username"])){
                $this->RequestParams["Username"] = $param["Username"] ? "true" : "false";
            } else {
                $this->RequestParams["Username"] = $param["Username"];
            }
        }
        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            if(is_bool($param["Password"])){
                $this->RequestParams["Password"] = $param["Password"] ? "true" : "false";
            } else {
                $this->RequestParams["Password"] = $param["Password"];
            }
        }
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            if(is_bool($param["Key"])){
                $this->RequestParams["Key"] = $param["Key"] ? "true" : "false";
            } else {
                $this->RequestParams["Key"] = $param["Key"];
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