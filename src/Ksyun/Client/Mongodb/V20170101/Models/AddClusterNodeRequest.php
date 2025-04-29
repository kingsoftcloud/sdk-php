<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddClusterNodeRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "InstanceId" => null,
        /**String**/
        "NodeType" => null,
        /**String**/
        "NodeClass" => null,
        /**Int**/
        "NodeStorage" => null,
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
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            if (is_bool($param["InstanceId"])) {
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("NodeType", $param) and $param["NodeType"] !== null) {
            if (is_bool($param["NodeType"])) {
                $this->RequestParams["NodeType"] = $param["NodeType"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeType"] = $param["NodeType"];
            }
        }
        if (array_key_exists("NodeClass", $param) and $param["NodeClass"] !== null) {
            if (is_bool($param["NodeClass"])) {
                $this->RequestParams["NodeClass"] = $param["NodeClass"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeClass"] = $param["NodeClass"];
            }
        }
        if (array_key_exists("NodeStorage", $param) and $param["NodeStorage"] !== null) {
            if (is_bool($param["NodeStorage"])) {
                $this->RequestParams["NodeStorage"] = $param["NodeStorage"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeStorage"] = $param["NodeStorage"];
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