<?php

namespace Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ScaleInInstanceGroupsRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ClusterId" => null,
        /**Array**/
        "InstanceGroups" => null,
        /**Boolean**/
        "GracefulScaleIn" => null,
        /**Int**/
        "GracefulScaleInTimeout" => null,
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
        if (array_key_exists("InstanceGroups", $param) and $param["InstanceGroups"] !== null) {
            if (is_bool($param["InstanceGroups"])) {
                $this->RequestParams["InstanceGroups"] = $param["InstanceGroups"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceGroups"] = $param["InstanceGroups"];
            }
        }
        if (array_key_exists("GracefulScaleIn", $param) and $param["GracefulScaleIn"] !== null) {
            if (is_bool($param["GracefulScaleIn"])) {
                $this->RequestParams["GracefulScaleIn"] = $param["GracefulScaleIn"] ? "true" : "false";
            } else {
                $this->RequestParams["GracefulScaleIn"] = $param["GracefulScaleIn"];
            }
        }
        if (array_key_exists("GracefulScaleInTimeout", $param) and $param["GracefulScaleInTimeout"] !== null) {
            if (is_bool($param["GracefulScaleInTimeout"])) {
                $this->RequestParams["GracefulScaleInTimeout"] = $param["GracefulScaleInTimeout"] ? "true" : "false";
            } else {
                $this->RequestParams["GracefulScaleInTimeout"] = $param["GracefulScaleInTimeout"];
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