<?php

namespace Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteImageCacheRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ImageCacheId" => null,
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
        if (array_key_exists("ImageCacheId", $param) and $param["ImageCacheId"] !== null) {
            if (is_bool($param["ImageCacheId"])) {
                $this->RequestParams["ImageCacheId"] = $param["ImageCacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageCacheId"] = $param["ImageCacheId"];
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