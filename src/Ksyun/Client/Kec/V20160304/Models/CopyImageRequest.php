<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CopyImageRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DestinationImageName" => null,
    ];

    /**特殊参数类型:Filter**/
    public $ImageId = [];
    /**特殊参数类型:Filter**/
    public $DestinationRegion = [];

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
            $res = $this->formatFilterParams("ImageId", $param["ImageId"]);
            $this->_unserialize("ImageId", $res);
        }
        if (array_key_exists("DestinationRegion", $param) and $param["DestinationRegion"] !== null) {
            $res = $this->formatFilterParams("DestinationRegion", $param["DestinationRegion"]);
            $this->_unserialize("DestinationRegion", $res);
        }
        if (array_key_exists("DestinationImageName", $param) and $param["DestinationImageName"] !== null) {
            if (is_bool($param["DestinationImageName"])) {
                $this->RequestParams["DestinationImageName"] = $param["DestinationImageName"] ? "true" : "false";
            } else {
                $this->RequestParams["DestinationImageName"] = $param["DestinationImageName"];
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