<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteProcessRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "OperationProcessId" => null,
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
        if (array_key_exists("OperationProcessId", $param) and $param["OperationProcessId"] !== null) {
            if (is_bool($param["OperationProcessId"])) {
                $this->RequestParams["OperationProcessId"] = $param["OperationProcessId"] ? "true" : "false";
            } else {
                $this->RequestParams["OperationProcessId"] = $param["OperationProcessId"];
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