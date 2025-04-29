<?php

namespace Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteAccessControlRuleRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "RuleId" => null,
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