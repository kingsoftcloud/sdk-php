<?php

namespace Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeZoneRecordRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ZoneId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $RecordId = [];
    /**特殊参数类型:Filter**/
    public $Filter = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ZoneId", $param) and $param["ZoneId"] !== null) {
            if (is_bool($param["ZoneId"])) {
                $this->RequestParams["ZoneId"] = $param["ZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["ZoneId"] = $param["ZoneId"];
            }
        }
        if (array_key_exists("RecordId", $param) and $param["RecordId"] !== null) {
            $res = $this->formatFilterParams("RecordId", $param["RecordId"]);
            $this->_unserialize("RecordId", $res);
        }
        if (array_key_exists("Filter", $param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter", $param["Filter"]);
            $this->_unserialize("Filter", $res);
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