<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateFileDeletePolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "FileDeletePolicyName" => null,
         /**String**/
        "DirPath" => null,
         /**String**/
        "ExecutionType" => null,
         /**String**/
        "FrequencyUnit" => null,
         /**Array**/
        "IndexOfFrequency" => null,
         /**Array**/
        "FrequencyTimePoints" => null,
         /**Object**/
        "FileNameRule" => null,
         /**Object**/
        "FileSizeRule" => null,
         /**Array**/
        "TimeRuleParameters" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
            }
        }
        if (array_key_exists("FileDeletePolicyName",$param) and $param["FileDeletePolicyName"] !== null) {
            if(is_bool($param["FileDeletePolicyName"])){
                $this->RequestParams["FileDeletePolicyName"] = $param["FileDeletePolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["FileDeletePolicyName"] = $param["FileDeletePolicyName"];
            }
        }
        if (array_key_exists("DirPath",$param) and $param["DirPath"] !== null) {
            if(is_bool($param["DirPath"])){
                $this->RequestParams["DirPath"] = $param["DirPath"] ? "true" : "false";
            } else {
                $this->RequestParams["DirPath"] = $param["DirPath"];
            }
        }
        if (array_key_exists("ExecutionType",$param) and $param["ExecutionType"] !== null) {
            if(is_bool($param["ExecutionType"])){
                $this->RequestParams["ExecutionType"] = $param["ExecutionType"] ? "true" : "false";
            } else {
                $this->RequestParams["ExecutionType"] = $param["ExecutionType"];
            }
        }
        if (array_key_exists("FrequencyUnit",$param) and $param["FrequencyUnit"] !== null) {
            if(is_bool($param["FrequencyUnit"])){
                $this->RequestParams["FrequencyUnit"] = $param["FrequencyUnit"] ? "true" : "false";
            } else {
                $this->RequestParams["FrequencyUnit"] = $param["FrequencyUnit"];
            }
        }
        if (array_key_exists("IndexOfFrequency",$param) and $param["IndexOfFrequency"] !== null) {
            if(is_bool($param["IndexOfFrequency"])){
                $this->RequestParams["IndexOfFrequency"] = $param["IndexOfFrequency"] ? "true" : "false";
            } else {
                $this->RequestParams["IndexOfFrequency"] = $param["IndexOfFrequency"];
            }
        }
        if (array_key_exists("FrequencyTimePoints",$param) and $param["FrequencyTimePoints"] !== null) {
            if(is_bool($param["FrequencyTimePoints"])){
                $this->RequestParams["FrequencyTimePoints"] = $param["FrequencyTimePoints"] ? "true" : "false";
            } else {
                $this->RequestParams["FrequencyTimePoints"] = $param["FrequencyTimePoints"];
            }
        }
        if (array_key_exists("FileNameRule",$param) and $param["FileNameRule"] !== null) {
            if(is_bool($param["FileNameRule"])){
                $this->RequestParams["FileNameRule"] = $param["FileNameRule"] ? "true" : "false";
            } else {
                $this->RequestParams["FileNameRule"] = $param["FileNameRule"];
            }
        }
        if (array_key_exists("FileSizeRule",$param) and $param["FileSizeRule"] !== null) {
            if(is_bool($param["FileSizeRule"])){
                $this->RequestParams["FileSizeRule"] = $param["FileSizeRule"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSizeRule"] = $param["FileSizeRule"];
            }
        }
        if (array_key_exists("TimeRuleParameters",$param) and $param["TimeRuleParameters"] !== null) {
            if(is_bool($param["TimeRuleParameters"])){
                $this->RequestParams["TimeRuleParameters"] = $param["TimeRuleParameters"] ? "true" : "false";
            } else {
                $this->RequestParams["TimeRuleParameters"] = $param["TimeRuleParameters"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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