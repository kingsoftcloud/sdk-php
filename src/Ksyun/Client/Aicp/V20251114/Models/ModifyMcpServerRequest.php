<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyMcpServerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "McpServerId" => null,
         /**String**/
        "McpServerName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "Introduction" => null,
         /**String**/
        "OutboundAuthFieldValue" => null,
         /**String**/
        "HttpApiConfig" => null,
         /**String**/
        "HttpApiConfigUpdateType" => null,
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
        if (array_key_exists("McpServerId",$param) and $param["McpServerId"] !== null) {
            if(is_bool($param["McpServerId"])){
                $this->RequestParams["McpServerId"] = $param["McpServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["McpServerId"] = $param["McpServerId"];
            }
        }
        if (array_key_exists("McpServerName",$param) and $param["McpServerName"] !== null) {
            if(is_bool($param["McpServerName"])){
                $this->RequestParams["McpServerName"] = $param["McpServerName"] ? "true" : "false";
            } else {
                $this->RequestParams["McpServerName"] = $param["McpServerName"];
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
        if (array_key_exists("OutboundAuthFieldValue",$param) and $param["OutboundAuthFieldValue"] !== null) {
            if(is_bool($param["OutboundAuthFieldValue"])){
                $this->RequestParams["OutboundAuthFieldValue"] = $param["OutboundAuthFieldValue"] ? "true" : "false";
            } else {
                $this->RequestParams["OutboundAuthFieldValue"] = $param["OutboundAuthFieldValue"];
            }
        }
        if (array_key_exists("HttpApiConfig",$param) and $param["HttpApiConfig"] !== null) {
            if(is_bool($param["HttpApiConfig"])){
                $this->RequestParams["HttpApiConfig"] = $param["HttpApiConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpApiConfig"] = $param["HttpApiConfig"];
            }
        }
        if (array_key_exists("HttpApiConfigUpdateType",$param) and $param["HttpApiConfigUpdateType"] !== null) {
            if(is_bool($param["HttpApiConfigUpdateType"])){
                $this->RequestParams["HttpApiConfigUpdateType"] = $param["HttpApiConfigUpdateType"] ? "true" : "false";
            } else {
                $this->RequestParams["HttpApiConfigUpdateType"] = $param["HttpApiConfigUpdateType"];
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