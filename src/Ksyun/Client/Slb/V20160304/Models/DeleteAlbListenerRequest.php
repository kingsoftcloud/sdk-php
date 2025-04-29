<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteAlbListenerRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AlbListenerId" => null,
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
        if (array_key_exists("AlbListenerId", $param) and $param["AlbListenerId"] !== null) {
            if (is_bool($param["AlbListenerId"])) {
                $this->RequestParams["AlbListenerId"] = $param["AlbListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbListenerId"] = $param["AlbListenerId"];
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