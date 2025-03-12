<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CloudDeskeditRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "instanceId" => null,
        /**String**/
        "name" => null,
        /**Int**/
        "id" => null,
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
        if (array_key_exists("instanceId", $param) and $param["instanceId"] !== null) {
            if (is_bool($param["instanceId"])) {
                $this->RequestParams["instanceId"] = $param["instanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceId"] = $param["instanceId"];
            }
        }
        if (array_key_exists("name", $param) and $param["name"] !== null) {
            if (is_bool($param["name"])) {
                $this->RequestParams["name"] = $param["name"] ? "true" : "false";
            } else {
                $this->RequestParams["name"] = $param["name"];
            }
        }
        if (array_key_exists("id", $param) and $param["id"] !== null) {
            if (is_bool($param["id"])) {
                $this->RequestParams["id"] = $param["id"] ? "true" : "false";
            } else {
                $this->RequestParams["id"] = $param["id"];
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