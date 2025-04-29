<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetIndexTemplateRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ProjectName" => null,
        /**String**/
        "LogPoolName" => null,
        /**Boolean**/
        "IndexStatus" => null,
        /**String**/
        "FullTextIndex" => null,
        /**String**/
        "IndexFields" => null,
        /**Boolean**/
        "Lowercase" => null,
        /**String**/
        "Separator" => null,
        /**String**/
        "FieldName" => null,
        /**String**/
        "FieldType" => null,
        /**String**/
        "FieldAlias" => null,
        /**Boolean**/
        "SeparatorStatus" => null,
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
        if (array_key_exists("ProjectName", $param) and $param["ProjectName"] !== null) {
            if (is_bool($param["ProjectName"])) {
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("LogPoolName", $param) and $param["LogPoolName"] !== null) {
            if (is_bool($param["LogPoolName"])) {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"];
            }
        }
        if (array_key_exists("IndexStatus", $param) and $param["IndexStatus"] !== null) {
            if (is_bool($param["IndexStatus"])) {
                $this->RequestParams["IndexStatus"] = $param["IndexStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["IndexStatus"] = $param["IndexStatus"];
            }
        }
        if (array_key_exists("FullTextIndex", $param) and $param["FullTextIndex"] !== null) {
            if (is_bool($param["FullTextIndex"])) {
                $this->RequestParams["FullTextIndex"] = $param["FullTextIndex"] ? "true" : "false";
            } else {
                $this->RequestParams["FullTextIndex"] = $param["FullTextIndex"];
            }
        }
        if (array_key_exists("IndexFields", $param) and $param["IndexFields"] !== null) {
            if (is_bool($param["IndexFields"])) {
                $this->RequestParams["IndexFields"] = $param["IndexFields"] ? "true" : "false";
            } else {
                $this->RequestParams["IndexFields"] = $param["IndexFields"];
            }
        }
        if (array_key_exists("Lowercase", $param) and $param["Lowercase"] !== null) {
            if (is_bool($param["Lowercase"])) {
                $this->RequestParams["Lowercase"] = $param["Lowercase"] ? "true" : "false";
            } else {
                $this->RequestParams["Lowercase"] = $param["Lowercase"];
            }
        }
        if (array_key_exists("Separator", $param) and $param["Separator"] !== null) {
            if (is_bool($param["Separator"])) {
                $this->RequestParams["Separator"] = $param["Separator"] ? "true" : "false";
            } else {
                $this->RequestParams["Separator"] = $param["Separator"];
            }
        }
        if (array_key_exists("FieldName", $param) and $param["FieldName"] !== null) {
            if (is_bool($param["FieldName"])) {
                $this->RequestParams["FieldName"] = $param["FieldName"] ? "true" : "false";
            } else {
                $this->RequestParams["FieldName"] = $param["FieldName"];
            }
        }
        if (array_key_exists("FieldType", $param) and $param["FieldType"] !== null) {
            if (is_bool($param["FieldType"])) {
                $this->RequestParams["FieldType"] = $param["FieldType"] ? "true" : "false";
            } else {
                $this->RequestParams["FieldType"] = $param["FieldType"];
            }
        }
        if (array_key_exists("FieldAlias", $param) and $param["FieldAlias"] !== null) {
            if (is_bool($param["FieldAlias"])) {
                $this->RequestParams["FieldAlias"] = $param["FieldAlias"] ? "true" : "false";
            } else {
                $this->RequestParams["FieldAlias"] = $param["FieldAlias"];
            }
        }
        if (array_key_exists("SeparatorStatus", $param) and $param["SeparatorStatus"] !== null) {
            if (is_bool($param["SeparatorStatus"])) {
                $this->RequestParams["SeparatorStatus"] = $param["SeparatorStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["SeparatorStatus"] = $param["SeparatorStatus"];
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