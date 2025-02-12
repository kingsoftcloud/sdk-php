<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CloudDeskcreateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "instanceName" => null,
         /**String**/
        "instanceType" => null,
         /**String**/
        "imageId" => null,
         /**String**/
        "edgeNodeId" => null,
         /**Int**/
        "systemDisk" => null,
         /**Int**/
        "dataDisk" => null,
         /**Int**/
        "billType" => null,
         /**Int**/
        "duration" => null,
         /**String**/
        "securityGroupId" => null,
         /**String**/
        "gpu" => null,
         /**Int**/
        "quantity" => null,
         /**Boolean**/
        "uniqueSuffix" => null,
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
        if (array_key_exists("instanceName",$param) and $param["instanceName"] !== null) {
            if(is_bool($param["instanceName"])){
                $this->RequestParams["instanceName"] = $param["instanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceName"] = $param["instanceName"];
            }
        }
        if (array_key_exists("instanceType",$param) and $param["instanceType"] !== null) {
            if(is_bool($param["instanceType"])){
                $this->RequestParams["instanceType"] = $param["instanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceType"] = $param["instanceType"];
            }
        }
        if (array_key_exists("imageId",$param) and $param["imageId"] !== null) {
            if(is_bool($param["imageId"])){
                $this->RequestParams["imageId"] = $param["imageId"] ? "true" : "false";
            } else {
                $this->RequestParams["imageId"] = $param["imageId"];
            }
        }
        if (array_key_exists("edgeNodeId",$param) and $param["edgeNodeId"] !== null) {
            if(is_bool($param["edgeNodeId"])){
                $this->RequestParams["edgeNodeId"] = $param["edgeNodeId"] ? "true" : "false";
            } else {
                $this->RequestParams["edgeNodeId"] = $param["edgeNodeId"];
            }
        }
        if (array_key_exists("systemDisk",$param) and $param["systemDisk"] !== null) {
            if(is_bool($param["systemDisk"])){
                $this->RequestParams["systemDisk"] = $param["systemDisk"] ? "true" : "false";
            } else {
                $this->RequestParams["systemDisk"] = $param["systemDisk"];
            }
        }
        if (array_key_exists("dataDisk",$param) and $param["dataDisk"] !== null) {
            if(is_bool($param["dataDisk"])){
                $this->RequestParams["dataDisk"] = $param["dataDisk"] ? "true" : "false";
            } else {
                $this->RequestParams["dataDisk"] = $param["dataDisk"];
            }
        }
        if (array_key_exists("billType",$param) and $param["billType"] !== null) {
            if(is_bool($param["billType"])){
                $this->RequestParams["billType"] = $param["billType"] ? "true" : "false";
            } else {
                $this->RequestParams["billType"] = $param["billType"];
            }
        }
        if (array_key_exists("duration",$param) and $param["duration"] !== null) {
            if(is_bool($param["duration"])){
                $this->RequestParams["duration"] = $param["duration"] ? "true" : "false";
            } else {
                $this->RequestParams["duration"] = $param["duration"];
            }
        }
        if (array_key_exists("securityGroupId",$param) and $param["securityGroupId"] !== null) {
            if(is_bool($param["securityGroupId"])){
                $this->RequestParams["securityGroupId"] = $param["securityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["securityGroupId"] = $param["securityGroupId"];
            }
        }
        if (array_key_exists("gpu",$param) and $param["gpu"] !== null) {
            if(is_bool($param["gpu"])){
                $this->RequestParams["gpu"] = $param["gpu"] ? "true" : "false";
            } else {
                $this->RequestParams["gpu"] = $param["gpu"];
            }
        }
        if (array_key_exists("quantity",$param) and $param["quantity"] !== null) {
            if(is_bool($param["quantity"])){
                $this->RequestParams["quantity"] = $param["quantity"] ? "true" : "false";
            } else {
                $this->RequestParams["quantity"] = $param["quantity"];
            }
        }
        if (array_key_exists("uniqueSuffix",$param) and $param["uniqueSuffix"] !== null) {
            if(is_bool($param["uniqueSuffix"])){
                $this->RequestParams["uniqueSuffix"] = $param["uniqueSuffix"] ? "true" : "false";
            } else {
                $this->RequestParams["uniqueSuffix"] = $param["uniqueSuffix"];
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