<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeImagesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ImageId" => null,
        /**String**/
        "ImageType" => null,
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
        if (array_key_exists("ImageId", $param) and $param["ImageId"] !== null) {
            if (is_bool($param["ImageId"])) {
                $this->RequestParams["ImageId"] = $param["ImageId"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageId"] = $param["ImageId"];
            }
        }
        if (array_key_exists("ImageType", $param) and $param["ImageType"] !== null) {
            if (is_bool($param["ImageType"])) {
                $this->RequestParams["ImageType"] = $param["ImageType"] ? "true" : "false";
            } else {
                $this->RequestParams["ImageType"] = $param["ImageType"];
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