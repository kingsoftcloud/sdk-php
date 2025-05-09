<?php

namespace Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AnalyzeBigKeysRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "TaskId" => null,
        /**Int**/
        "QueryType" => null,
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
        if (array_key_exists("TaskId", $param) and $param["TaskId"] !== null) {
            if (is_bool($param["TaskId"])) {
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
            }
        }
        if (array_key_exists("QueryType", $param) and $param["QueryType"] !== null) {
            if (is_bool($param["QueryType"])) {
                $this->RequestParams["QueryType"] = $param["QueryType"] ? "true" : "false";
            } else {
                $this->RequestParams["QueryType"] = $param["QueryType"];
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