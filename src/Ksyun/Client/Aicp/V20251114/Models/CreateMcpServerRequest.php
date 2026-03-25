<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateMcpServerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "McpServerName" => null,
         /**String**/
        "McpServerNameEn" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "Introduction" => null,
         /**String**/
        "ServiceProtocol" => null,
         /**String**/
        "BackendServiceUrl" => null,
         /**Boolean**/
        "AllowCustomAuth" => null,
         /**String**/
        "ServiceCustomHeaders" => null,
         /**String**/
        "OutboundAuthLocation" => null,
         /**String**/
        "OutboundAuthFieldName" => null,
         /**String**/
        "OutboundAuthFieldValue" => null,
         /**Object**/
        "McpRuntimeConfig" => null,
         /**String**/
        "HttpApiConfig" => null,
         /**String**/
        "McpType" => null,
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
        if (array_key_exists("McpServerName",$param) and $param["McpServerName"] !== null) {
            if(is_bool($param["McpServerName"])){
                $this->RequestParams["McpServerName"] = $param["McpServerName"] ? "true" : "false";
            } else {
                $this->RequestParams["McpServerName"] = $param["McpServerName"];
            }
        }
        if (array_key_exists("McpServerNameEn",$param) and $param["McpServerNameEn"] !== null) {
            if(is_bool($param["McpServerNameEn"])){
                $this->RequestParams["McpServerNameEn"] = $param["McpServerNameEn"] ? "true" : "false";
            } else {
                $this->RequestParams["McpServerNameEn"] = $param["McpServerNameEn"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("Introduction",$param) and $param["Introduction"] !== null) {
            if(is_bool($param["Introduction"])){
                $this->RequestParams["Introduction"] = $param["Introduction"] ? "true" : "false";
            } else {
                $this->RequestParams["Introduction"] = $param["Introduction"];
            }
        }
        if (array_key_exists("ServiceProtocol",$param) and $param["ServiceProtocol"] !== null) {
            if(is_bool($param["ServiceProtocol"])){
                $this->RequestParams["ServiceProtocol"] = $param["ServiceProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["ServiceProtocol"] = $param["ServiceProtocol"];
            }
        }
        if (array_key_exists("BackendServiceUrl",$param) and $param["BackendServiceUrl"] !== null) {
            if(is_bool($param["BackendServiceUrl"])){
                $this->RequestParams["BackendServiceUrl"] = $param["BackendServiceUrl"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServiceUrl"] = $param["BackendServiceUrl"];
            }
        }
        if (array_key_exists("AllowCustomAuth",$param) and $param["AllowCustomAuth"] !== null) {
            if(is_bool($param["AllowCustomAuth"])){
                $this->RequestParams["AllowCustomAuth"] = $param["AllowCustomAuth"] ? "true" : "false";
            } else {
                $this->RequestParams["AllowCustomAuth"] = $param["AllowCustomAuth"];
            }
        }
        if (array_key_exists("ServiceCustomHeaders",$param) and $param["ServiceCustomHeaders"] !== null) {
            if(is_bool($param["ServiceCustomHeaders"])){
                $this->RequestParams["ServiceCustomHeaders"] = $param["ServiceCustomHeaders"] ? "true" : "false";
            } else {
                $this->RequestParams["ServiceCustomHeaders"] = $param["ServiceCustomHeaders"];
            }
        }
        if (array_key_exists("OutboundAuthLocation",$param) and $param["OutboundAuthLocation"] !== null) {
            if(is_bool($param["OutboundAuthLocation"])){
                $this->RequestParams["OutboundAuthLocation"] = $param["OutboundAuthLocation"] ? "true" : "false";
            } else {
                $this->RequestParams["OutboundAuthLocation"] = $param["OutboundAuthLocation"];
            }
        }
        if (array_key_exists("OutboundAuthFieldName",$param) and $param["OutboundAuthFieldName"] !== null) {
            if(is_bool($param["OutboundAuthFieldName"])){
                $this->RequestParams["OutboundAuthFieldName"] = $param["OutboundAuthFieldName"] ? "true" : "false";
            } else {
                $this->RequestParams["OutboundAuthFieldName"] = $param["OutboundAuthFieldName"];
            }
        }
        if (array_key_exists("OutboundAuthFieldValue",$param) and $param["OutboundAuthFieldValue"] !== null) {
            if(is_bool($param["OutboundAuthFieldValue"])){
                $this->RequestParams["OutboundAuthFieldValue"] = $param["OutboundAuthFieldValue"] ? "true" : "false";
            } else {
                $this->RequestParams["OutboundAuthFieldValue"] = $param["OutboundAuthFieldValue"];
            }
        }
        if (array_key_exists("McpRuntimeConfig",$param) and $param["McpRuntimeConfig"] !== null) {
            if(is_bool($param["McpRuntimeConfig"])){
                $this->RequestParams["McpRuntimeConfig"] = $param["McpRuntimeConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["McpRuntimeConfig"] = $param["McpRuntimeConfig"];
            }
        }
        if (array_key_exists("HttpApiConfig",$param) and $param["HttpApiConfig"] !== null) {
            if(is_bool($param["HttpApiConfig"])){
                $this->RequestParams["HttpApiConfig"] = $param["HttpApiConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpApiConfig"] = $param["HttpApiConfig"];
            }
        }
        if (array_key_exists("McpType",$param) and $param["McpType"] !== null) {
            if(is_bool($param["McpType"])){
                $this->RequestParams["McpType"] = $param["McpType"] ? "true" : "false";
            } else {
                $this->RequestParams["McpType"] = $param["McpType"];
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