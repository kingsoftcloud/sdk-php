<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ResumeRunRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AgentId" => null,
         /**String**/
        "SessionId" => null,
         /**String**/
        "RunId" => null,
         /**String**/
        "CheckpointId" => null,
         /**String**/
        "ResumeAttemptId" => null,
         /**String**/
        "InvocationId" => null,
         /**Boolean**/
        "Stream" => null,
         /**Boolean**/
        "Background" => null,
         /**String**/
        "Model" => null,
         /**Boolean**/
        "ResumeInstructionEnabled" => null,
         /**String**/
        "ResumeInstruction" => null,
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
        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            if(is_bool($param["RunId"])){
                $this->RequestParams["RunId"] = $param["RunId"] ? "true" : "false";
            } else {
                $this->RequestParams["RunId"] = $param["RunId"];
            }
        }
        if (array_key_exists("CheckpointId",$param) and $param["CheckpointId"] !== null) {
            if(is_bool($param["CheckpointId"])){
                $this->RequestParams["CheckpointId"] = $param["CheckpointId"] ? "true" : "false";
            } else {
                $this->RequestParams["CheckpointId"] = $param["CheckpointId"];
            }
        }
        if (array_key_exists("ResumeAttemptId",$param) and $param["ResumeAttemptId"] !== null) {
            if(is_bool($param["ResumeAttemptId"])){
                $this->RequestParams["ResumeAttemptId"] = $param["ResumeAttemptId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResumeAttemptId"] = $param["ResumeAttemptId"];
            }
        }
        if (array_key_exists("InvocationId",$param) and $param["InvocationId"] !== null) {
            if(is_bool($param["InvocationId"])){
                $this->RequestParams["InvocationId"] = $param["InvocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["InvocationId"] = $param["InvocationId"];
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            if(is_bool($param["Model"])){
                $this->RequestParams["Model"] = $param["Model"] ? "true" : "false";
            } else {
                $this->RequestParams["Model"] = $param["Model"];
            }
        }
        if (array_key_exists("ResumeInstructionEnabled",$param) and $param["ResumeInstructionEnabled"] !== null) {
            if(is_bool($param["ResumeInstructionEnabled"])){
                $this->RequestParams["ResumeInstructionEnabled"] = $param["ResumeInstructionEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["ResumeInstructionEnabled"] = $param["ResumeInstructionEnabled"];
            }
        }
        if (array_key_exists("ResumeInstruction",$param) and $param["ResumeInstruction"] !== null) {
            if(is_bool($param["ResumeInstruction"])){
                $this->RequestParams["ResumeInstruction"] = $param["ResumeInstruction"] ? "true" : "false";
            } else {
                $this->RequestParams["ResumeInstruction"] = $param["ResumeInstruction"];
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