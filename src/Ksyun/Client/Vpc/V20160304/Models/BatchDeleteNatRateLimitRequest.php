<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class BatchDeleteNatRateLimitRequest extends BaseModel
{
    public $RequestParams = [
    ];

    /**特殊参数类型:Filter**/
    public $NatRateLimitId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NatRateLimitId", $param) and $param["NatRateLimitId"] !== null) {
            $res = $this->formatFilterParams("NatRateLimitId", $param["NatRateLimitId"]);
            $this->_unserialize("NatRateLimitId", $res);
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