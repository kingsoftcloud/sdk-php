<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddAlbRuleRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AlbRuleGroupId" => null,
        /**String**/
        "AlbRuleType" => null,
        /**String**/
        "AlbRuleValue" => null,
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