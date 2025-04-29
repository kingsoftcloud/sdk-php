<?php

namespace Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeAccessControlRulesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "RuleId" => null,
        /**String**/
        "ResourceRecordId" => null,
        /**String**/
        "RuleName" => null,
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
        if (array_key_exists("RuleId", $param) and $param["RuleId"] !== null) {
            if (is_bool($param["RuleId"])) {
                $this->RequestParams["RuleId"] = $param["RuleId"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleId"] = $param["RuleId"];
            }
        }
        if (array_key_exists("ResourceRecordId", $param) and $param["ResourceRecordId"] !== null) {
            if (is_bool($param["ResourceRecordId"])) {
                $this->RequestParams["ResourceRecordId"] = $param["ResourceRecordId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourceRecordId"] = $param["ResourceRecordId"];
            }
        }
        if (array_key_exists("RuleName", $param) and $param["RuleName"] !== null) {
            if (is_bool($param["RuleName"])) {
                $this->RequestParams["RuleName"] = $param["RuleName"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleName"] = $param["RuleName"];
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