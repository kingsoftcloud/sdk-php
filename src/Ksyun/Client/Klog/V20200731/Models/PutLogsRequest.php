<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class PutLogsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProjectName" => null,
         /**String**/
        "LogPoolName" => null,
         /**String**/
        "Time" => null,
         /**String**/
        "Contents" => null,
         /**String**/
        "Key" => null,
         /**String**/
        "Value" => null,
         /**String**/
        "Logs" => null,
         /**String**/
        "Filename" => null,
         /**String**/
        "Source" => null,
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
        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            if(is_bool($param["ProjectName"])){
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("LogPoolName",$param) and $param["LogPoolName"] !== null) {
            if(is_bool($param["LogPoolName"])){
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"];
            }
        }
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            if(is_bool($param["Time"])){
                $this->RequestParams["Time"] = $param["Time"] ? "true" : "false";
            } else {
                $this->RequestParams["Time"] = $param["Time"];
            }
        }
        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            if(is_bool($param["Contents"])){
                $this->RequestParams["Contents"] = $param["Contents"] ? "true" : "false";
            } else {
                $this->RequestParams["Contents"] = $param["Contents"];
            }
        }
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            if(is_bool($param["Key"])){
                $this->RequestParams["Key"] = $param["Key"] ? "true" : "false";
            } else {
                $this->RequestParams["Key"] = $param["Key"];
            }
        }
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            if(is_bool($param["Value"])){
                $this->RequestParams["Value"] = $param["Value"] ? "true" : "false";
            } else {
                $this->RequestParams["Value"] = $param["Value"];
            }
        }
        if (array_key_exists("Logs",$param) and $param["Logs"] !== null) {
            if(is_bool($param["Logs"])){
                $this->RequestParams["Logs"] = $param["Logs"] ? "true" : "false";
            } else {
                $this->RequestParams["Logs"] = $param["Logs"];
            }
        }
        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            if(is_bool($param["Filename"])){
                $this->RequestParams["Filename"] = $param["Filename"] ? "true" : "false";
            } else {
                $this->RequestParams["Filename"] = $param["Filename"];
            }
        }
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            if(is_bool($param["Source"])){
                $this->RequestParams["Source"] = $param["Source"] ? "true" : "false";
            } else {
                $this->RequestParams["Source"] = $param["Source"];
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