<?php

namespace Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyRecordRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "RecordValue" => null,
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
        if (array_key_exists("RecordValue", $param) and $param["RecordValue"] !== null) {
            if (is_bool($param["RecordValue"])) {
                $this->RequestParams["RecordValue"] = $param["RecordValue"] ? "true" : "false";
            } else {
                $this->RequestParams["RecordValue"] = $param["RecordValue"];
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