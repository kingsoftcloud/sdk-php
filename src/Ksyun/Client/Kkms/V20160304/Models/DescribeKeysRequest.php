<?php

namespace Ksyun\Client\Kkms\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeKeysRequest extends BaseModel
{
    public $RequestParams = [
    ];

    /**特殊参数类型:Filter**/
    public $KeyId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KeyId", $param) and $param["KeyId"] !== null) {
            $res = $this->formatFilterParams("KeyId", $param["KeyId"]);
            $this->_unserialize("KeyId", $res);
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