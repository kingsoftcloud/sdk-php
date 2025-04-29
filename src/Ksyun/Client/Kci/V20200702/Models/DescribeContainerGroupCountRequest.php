<?php

namespace Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeContainerGroupCountRequest extends BaseModel
{
    public $RequestParams = [
        /**Object**/
        "Label" => null,
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
        if (array_key_exists("Label", $param) and $param["Label"] !== null) {
            if (is_bool($param["Label"])) {
                $this->RequestParams["Label"] = $param["Label"] ? "true" : "false";
            } else {
                $this->RequestParams["Label"] = $param["Label"];
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