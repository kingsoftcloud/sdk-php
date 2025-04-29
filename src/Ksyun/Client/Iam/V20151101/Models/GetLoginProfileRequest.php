<?php

namespace Ksyun\Client\Iam\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetLoginProfileRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "UserName" => null,
        /**Int**/
        "NotCheckPassword" => null,
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
        if (array_key_exists("UserName", $param) and $param["UserName"] !== null) {
            if (is_bool($param["UserName"])) {
                $this->RequestParams["UserName"] = $param["UserName"] ? "true" : "false";
            } else {
                $this->RequestParams["UserName"] = $param["UserName"];
            }
        }
        if (array_key_exists("NotCheckPassword", $param) and $param["NotCheckPassword"] !== null) {
            if (is_bool($param["NotCheckPassword"])) {
                $this->RequestParams["NotCheckPassword"] = $param["NotCheckPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["NotCheckPassword"] = $param["NotCheckPassword"];
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