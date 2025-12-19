<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAgentRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AgentName" => null,
         /**String**/
        "AgentId" => null,
         /**String**/
        "AgentType" => null,
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
        if (array_key_exists("AgentName",$param) and $param["AgentName"] !== null) {
            if(is_bool($param["AgentName"])){
                $this->RequestParams["AgentName"] = $param["AgentName"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentName"] = $param["AgentName"];
            }
        }
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            if(is_bool($param["AgentId"])){
                $this->RequestParams["AgentId"] = $param["AgentId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentId"] = $param["AgentId"];
            }
        }
        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            if(is_bool($param["AgentType"])){
                $this->RequestParams["AgentType"] = $param["AgentType"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentType"] = $param["AgentType"];
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