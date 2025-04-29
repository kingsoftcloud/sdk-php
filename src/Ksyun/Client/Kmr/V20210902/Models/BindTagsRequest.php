<?php

namespace Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class BindTagsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ClusterId" => null,
        /**Array**/
        "Tags" => null,
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
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            if (is_bool($param["ClusterId"])) {
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("Tags", $param) and $param["Tags"] !== null) {
            if (is_bool($param["Tags"])) {
                $this->RequestParams["Tags"] = $param["Tags"] ? "true" : "false";
            } else {
                $this->RequestParams["Tags"] = $param["Tags"];
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