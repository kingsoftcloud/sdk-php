<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetLogsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ProjectName" => null,
         /**String**/
        "LogPoolName" => null,
         /**String**/
        "LogPoolId" => null,
         /**Int**/
        "From" => null,
         /**Int**/
        "To" => null,
         /**String**/
        "Query" => null,
         /**Int**/
        "Offset" => null,
         /**Int**/
        "Size" => null,
         /**Boolean**/
        "HitsOpen" => null,
         /**String**/
        "Interval" => null,
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
        if (array_key_exists("LogPoolId",$param) and $param["LogPoolId"] !== null) {
            if(is_bool($param["LogPoolId"])){
                $this->RequestParams["LogPoolId"] = $param["LogPoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolId"] = $param["LogPoolId"];
            }
        }
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            if(is_bool($param["From"])){
                $this->RequestParams["From"] = $param["From"] ? "true" : "false";
            } else {
                $this->RequestParams["From"] = $param["From"];
            }
        }
        if (array_key_exists("To",$param) and $param["To"] !== null) {
            if(is_bool($param["To"])){
                $this->RequestParams["To"] = $param["To"] ? "true" : "false";
            } else {
                $this->RequestParams["To"] = $param["To"];
            }
        }
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            if(is_bool($param["Query"])){
                $this->RequestParams["Query"] = $param["Query"] ? "true" : "false";
            } else {
                $this->RequestParams["Query"] = $param["Query"];
            }
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            if(is_bool($param["Offset"])){
                $this->RequestParams["Offset"] = $param["Offset"] ? "true" : "false";
            } else {
                $this->RequestParams["Offset"] = $param["Offset"];
            }
        }
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            if(is_bool($param["Size"])){
                $this->RequestParams["Size"] = $param["Size"] ? "true" : "false";
            } else {
                $this->RequestParams["Size"] = $param["Size"];
            }
        }
        if (array_key_exists("HitsOpen",$param) and $param["HitsOpen"] !== null) {
            if(is_bool($param["HitsOpen"])){
                $this->RequestParams["HitsOpen"] = $param["HitsOpen"] ? "true" : "false";
            } else {
                $this->RequestParams["HitsOpen"] = $param["HitsOpen"];
            }
        }
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            if(is_bool($param["Interval"])){
                $this->RequestParams["Interval"] = $param["Interval"] ? "true" : "false";
            } else {
                $this->RequestParams["Interval"] = $param["Interval"];
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