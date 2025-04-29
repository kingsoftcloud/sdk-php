<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteRuleRequest extends BaseModel
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