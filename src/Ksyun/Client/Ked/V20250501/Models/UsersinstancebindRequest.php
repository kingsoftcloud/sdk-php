<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UsersinstancebindRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "id" => null,
        /**String**/
        "instanceId" => null,
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
        if (array_key_exists("id", $param) and $param["id"] !== null) {
            if (is_bool($param["id"])) {
                $this->RequestParams["id"] = $param["id"] ? "true" : "false";
            } else {
                $this->RequestParams["id"] = $param["id"];
            }
        }
        if (array_key_exists("instanceId", $param) and $param["instanceId"] !== null) {
            if (is_bool($param["instanceId"])) {
                $this->RequestParams["instanceId"] = $param["instanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceId"] = $param["instanceId"];
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