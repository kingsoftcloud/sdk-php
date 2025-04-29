<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetEnableAlbAccessLogRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AlbId" => null,
        /**Boolean**/
        "EnabledLog" => null,
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
        if (array_key_exists("AlbId", $param) and $param["AlbId"] !== null) {
            if (is_bool($param["AlbId"])) {
                $this->RequestParams["AlbId"] = $param["AlbId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbId"] = $param["AlbId"];
            }
        }
        if (array_key_exists("EnabledLog", $param) and $param["EnabledLog"] !== null) {
            if (is_bool($param["EnabledLog"])) {
                $this->RequestParams["EnabledLog"] = $param["EnabledLog"] ? "true" : "false";
            } else {
                $this->RequestParams["EnabledLog"] = $param["EnabledLog"];
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