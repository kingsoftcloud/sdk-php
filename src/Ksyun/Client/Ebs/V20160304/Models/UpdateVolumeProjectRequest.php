<?php

namespace Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateVolumeProjectRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ProjectId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $VolumeId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VolumeId", $param) and $param["VolumeId"] !== null) {
            $res = $this->formatFilterParams("VolumeId", $param["VolumeId"]);
            $this->_unserialize("VolumeId", $res);
        }
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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