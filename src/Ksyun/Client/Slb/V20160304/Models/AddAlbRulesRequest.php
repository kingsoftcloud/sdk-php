<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddAlbRulesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AlbRuleGroupId" => null,
        /**String**/
        "AlbRuleType" => null,
        /**String**/
        "AlbRuleValue" => null,
        /**Array**/
        "MethodValue" => null,
        /**Array**/
        "SourceIpValue" => null,
        /**Array**/
        "HeaderValue" => null,
        /**Array**/
        "QueryValue" => null,
        /**Array**/
        "CookieValue" => null,
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
        if (array_key_exists("AlbRuleGroupId", $param) and $param["AlbRuleGroupId"] !== null) {
            if (is_bool($param["AlbRuleGroupId"])) {
                $this->RequestParams["AlbRuleGroupId"] = $param["AlbRuleGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbRuleGroupId"] = $param["AlbRuleGroupId"];
            }
        }
        if (array_key_exists("AlbRuleType", $param) and $param["AlbRuleType"] !== null) {
            if (is_bool($param["AlbRuleType"])) {
                $this->RequestParams["AlbRuleType"] = $param["AlbRuleType"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbRuleType"] = $param["AlbRuleType"];
            }
        }
        if (array_key_exists("AlbRuleValue", $param) and $param["AlbRuleValue"] !== null) {
            if (is_bool($param["AlbRuleValue"])) {
                $this->RequestParams["AlbRuleValue"] = $param["AlbRuleValue"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbRuleValue"] = $param["AlbRuleValue"];
            }
        }
        if (array_key_exists("MethodValue", $param) and $param["MethodValue"] !== null) {
            if (is_bool($param["MethodValue"])) {
                $this->RequestParams["MethodValue"] = $param["MethodValue"] ? "true" : "false";
            } else {
                $this->RequestParams["MethodValue"] = $param["MethodValue"];
            }
        }
        if (array_key_exists("SourceIpValue", $param) and $param["SourceIpValue"] !== null) {
            if (is_bool($param["SourceIpValue"])) {
                $this->RequestParams["SourceIpValue"] = $param["SourceIpValue"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceIpValue"] = $param["SourceIpValue"];
            }
        }
        if (array_key_exists("HeaderValue", $param) and $param["HeaderValue"] !== null) {
            if (is_bool($param["HeaderValue"])) {
                $this->RequestParams["HeaderValue"] = $param["HeaderValue"] ? "true" : "false";
            } else {
                $this->RequestParams["HeaderValue"] = $param["HeaderValue"];
            }
        }
        if (array_key_exists("QueryValue", $param) and $param["QueryValue"] !== null) {
            if (is_bool($param["QueryValue"])) {
                $this->RequestParams["QueryValue"] = $param["QueryValue"] ? "true" : "false";
            } else {
                $this->RequestParams["QueryValue"] = $param["QueryValue"];
            }
        }
        if (array_key_exists("CookieValue", $param) and $param["CookieValue"] !== null) {
            if (is_bool($param["CookieValue"])) {
                $this->RequestParams["CookieValue"] = $param["CookieValue"] ? "true" : "false";
            } else {
                $this->RequestParams["CookieValue"] = $param["CookieValue"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}