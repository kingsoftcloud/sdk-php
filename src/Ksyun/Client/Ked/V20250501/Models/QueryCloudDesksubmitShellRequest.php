<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryCloudDesksubmitShellRequest extends BaseModel
{
    public $RequestParams = [
        /**Array**/
        "instanceIds" => null,
        /**String**/
        "name" => null,
        /**String**/
        "shellContent" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("instanceIds", $param) and $param["instanceIds"] !== null) {
            if (is_bool($param["instanceIds"])) {
                $this->RequestParams["instanceIds"] = $param["instanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceIds"] = $param["instanceIds"];
            }
        }
        if (array_key_exists("name", $param) and $param["name"] !== null) {
            if (is_bool($param["name"])) {
                $this->RequestParams["name"] = $param["name"] ? "true" : "false";
            } else {
                $this->RequestParams["name"] = $param["name"];
            }
        }
        if (array_key_exists("shellContent", $param) and $param["shellContent"] !== null) {
            if (is_bool($param["shellContent"])) {
                $this->RequestParams["shellContent"] = $param["shellContent"] ? "true" : "false";
            } else {
                $this->RequestParams["shellContent"] = $param["shellContent"];
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