<?php

namespace Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CloudDeskreinstallRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "instanceId" => null,
        /**String**/
        "imageId" => null,
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
        if (array_key_exists("imageId", $param) and $param["imageId"] !== null) {
            if (is_bool($param["imageId"])) {
                $this->RequestParams["imageId"] = $param["imageId"] ? "true" : "false";
            } else {
                $this->RequestParams["imageId"] = $param["imageId"];
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