<?php

namespace Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ExecContainerCommandRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ContainerGroupId" => null,
        /**String**/
        "ContainerName" => null,
        /**Boolean**/
        "TTY" => null,
    ];

    /**特殊参数类型:Filter**/
    public $Command = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ContainerGroupId", $param) and $param["ContainerGroupId"] !== null) {
            if (is_bool($param["ContainerGroupId"])) {
                $this->RequestParams["ContainerGroupId"] = $param["ContainerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerGroupId"] = $param["ContainerGroupId"];
            }
        }
        if (array_key_exists("ContainerName", $param) and $param["ContainerName"] !== null) {
            if (is_bool($param["ContainerName"])) {
                $this->RequestParams["ContainerName"] = $param["ContainerName"] ? "true" : "false";
            } else {
                $this->RequestParams["ContainerName"] = $param["ContainerName"];
            }
        }
        if (array_key_exists("Command", $param) and $param["Command"] !== null) {
            $res = $this->formatFilterParams("Command", $param["Command"]);
            $this->_unserialize("Command", $res);
        }
        if (array_key_exists("TTY", $param) and $param["TTY"] !== null) {
            if (is_bool($param["TTY"])) {
                $this->RequestParams["TTY"] = $param["TTY"] ? "true" : "false";
            } else {
                $this->RequestParams["TTY"] = $param["TTY"];
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