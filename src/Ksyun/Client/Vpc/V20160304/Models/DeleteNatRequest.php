<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteNatRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "NatId" => null,
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
        if (array_key_exists("NatId", $param) and $param["NatId"] !== null) {
            if (is_bool($param["NatId"])) {
                $this->RequestParams["NatId"] = $param["NatId"] ? "true" : "false";
            } else {
                $this->RequestParams["NatId"] = $param["NatId"];
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