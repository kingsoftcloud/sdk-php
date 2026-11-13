<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RunAgentRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AgentId" => null,
         /**Array**/
        "Messages" => null,
         /**String**/
        "SessionId" => null,
         /**String**/
        "Model" => null,
         /**Boolean**/
        "Stream" => null,
         /**Boolean**/
        "Background" => null,
         /**String**/
        "ApiFormat" => null,
         /**String**/
        "ResponsesInput" => null,
         /**String**/
        "PreviousResponseId" => null,
         /**String**/
        "InvocationId" => null,
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
        if (array_key_exists("Messages",$param) and $param["Messages"] !== null) {
            if(is_bool($param["Messages"])){
                $this->RequestParams["Messages"] = $param["Messages"] ? "true" : "false";
            } else {
                $this->RequestParams["Messages"] = $param["Messages"];
            }
        }
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            if(is_bool($param["SessionId"])){
                $this->RequestParams["SessionId"] = $param["SessionId"] ? "true" : "false";
            } else {
                $this->RequestParams["SessionId"] = $param["SessionId"];
            }
        }
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            if(is_bool($param["Model"])){
                $this->RequestParams["Model"] = $param["Model"] ? "true" : "false";
            } else {
                $this->RequestParams["Model"] = $param["Model"];
            }
        }
        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            if(is_bool($param["Stream"])){
                $this->RequestParams["Stream"] = $param["Stream"] ? "true" : "false";
            } else {
                $this->RequestParams["Stream"] = $param["Stream"];
            }
        }
        if (array_key_exists("Background",$param) and $param["Background"] !== null) {
            if(is_bool($param["Background"])){
                $this->RequestParams["Background"] = $param["Background"] ? "true" : "false";
            } else {
                $this->RequestParams["Background"] = $param["Background"];
            }
        }
        if (array_key_exists("ApiFormat",$param) and $param["ApiFormat"] !== null) {
            if(is_bool($param["ApiFormat"])){
                $this->RequestParams["ApiFormat"] = $param["ApiFormat"] ? "true" : "false";
            } else {
                $this->RequestParams["ApiFormat"] = $param["ApiFormat"];
            }
        }
        if (array_key_exists("ResponsesInput",$param) and $param["ResponsesInput"] !== null) {
            if(is_bool($param["ResponsesInput"])){
                $this->RequestParams["ResponsesInput"] = $param["ResponsesInput"] ? "true" : "false";
            } else {
                $this->RequestParams["ResponsesInput"] = $param["ResponsesInput"];
            }
        }
        if (array_key_exists("PreviousResponseId",$param) and $param["PreviousResponseId"] !== null) {
            if(is_bool($param["PreviousResponseId"])){
                $this->RequestParams["PreviousResponseId"] = $param["PreviousResponseId"] ? "true" : "false";
            } else {
                $this->RequestParams["PreviousResponseId"] = $param["PreviousResponseId"];
            }
        }
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            if(is_bool($param["InvocationId"])){
                $this->RequestParams["InvocationId"] = $param["InvocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["InvocationId"] = $param["InvocationId"];
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