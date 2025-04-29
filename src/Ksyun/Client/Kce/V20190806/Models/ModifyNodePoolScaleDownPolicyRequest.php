<?php

namespace Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNodePoolScaleDownPolicyRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ClusterId" => null,
        /**Int**/
        "MaxEmptyBulkDelete" => null,
        /**Int**/
        "ScaleDownDelayAfterAdd" => null,
        /**Boolean**/
        "ScaleDownEnabled" => null,
        /**Int**/
        "ScaleDownUnneededTime" => null,
        /**Int**/
        "ScaleDownUtilizationThreshold" => null,
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
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            if (is_bool($param["ClusterId"])) {
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("MaxEmptyBulkDelete", $param) and $param["MaxEmptyBulkDelete"] !== null) {
            if (is_bool($param["MaxEmptyBulkDelete"])) {
                $this->RequestParams["MaxEmptyBulkDelete"] = $param["MaxEmptyBulkDelete"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxEmptyBulkDelete"] = $param["MaxEmptyBulkDelete"];
            }
        }
        if (array_key_exists("ScaleDownDelayAfterAdd", $param) and $param["ScaleDownDelayAfterAdd"] !== null) {
            if (is_bool($param["ScaleDownDelayAfterAdd"])) {
                $this->RequestParams["ScaleDownDelayAfterAdd"] = $param["ScaleDownDelayAfterAdd"] ? "true" : "false";
            } else {
                $this->RequestParams["ScaleDownDelayAfterAdd"] = $param["ScaleDownDelayAfterAdd"];
            }
        }
        if (array_key_exists("ScaleDownEnabled", $param) and $param["ScaleDownEnabled"] !== null) {
            if (is_bool($param["ScaleDownEnabled"])) {
                $this->RequestParams["ScaleDownEnabled"] = $param["ScaleDownEnabled"] ? "true" : "false";
            } else {
                $this->RequestParams["ScaleDownEnabled"] = $param["ScaleDownEnabled"];
            }
        }
        if (array_key_exists("ScaleDownUnneededTime", $param) and $param["ScaleDownUnneededTime"] !== null) {
            if (is_bool($param["ScaleDownUnneededTime"])) {
                $this->RequestParams["ScaleDownUnneededTime"] = $param["ScaleDownUnneededTime"] ? "true" : "false";
            } else {
                $this->RequestParams["ScaleDownUnneededTime"] = $param["ScaleDownUnneededTime"];
            }
        }
        if (array_key_exists("ScaleDownUtilizationThreshold", $param) and $param["ScaleDownUtilizationThreshold"] !== null) {
            if (is_bool($param["ScaleDownUtilizationThreshold"])) {
                $this->RequestParams["ScaleDownUtilizationThreshold"] = $param["ScaleDownUtilizationThreshold"] ? "true" : "false";
            } else {
                $this->RequestParams["ScaleDownUtilizationThreshold"] = $param["ScaleDownUtilizationThreshold"];
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