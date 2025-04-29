<?php

namespace Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeCertificatesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "Request" => null,
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
        if (array_key_exists("Request", $param) and $param["Request"] !== null) {
            if (is_bool($param["Request"])) {
                $this->RequestParams["Request"] = $param["Request"] ? "true" : "false";
            } else {
                $this->RequestParams["Request"] = $param["Request"];
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