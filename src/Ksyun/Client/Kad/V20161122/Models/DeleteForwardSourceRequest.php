<?php

namespace Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteForwardSourceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ForwardSourceId" => null,
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
        if (array_key_exists("ForwardSourceId", $param) and $param["ForwardSourceId"] !== null) {
            if (is_bool($param["ForwardSourceId"])) {
                $this->RequestParams["ForwardSourceId"] = $param["ForwardSourceId"] ? "true" : "false";
            } else {
                $this->RequestParams["ForwardSourceId"] = $param["ForwardSourceId"];
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