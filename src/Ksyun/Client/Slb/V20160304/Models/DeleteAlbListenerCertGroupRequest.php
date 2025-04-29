<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteAlbListenerCertGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AlbListenerCertGroupId" => null,
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
        if (array_key_exists("AlbListenerCertGroupId", $param) and $param["AlbListenerCertGroupId"] !== null) {
            if (is_bool($param["AlbListenerCertGroupId"])) {
                $this->RequestParams["AlbListenerCertGroupId"] = $param["AlbListenerCertGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbListenerCertGroupId"] = $param["AlbListenerCertGroupId"];
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