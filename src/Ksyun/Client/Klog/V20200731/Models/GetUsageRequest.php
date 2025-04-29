<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetUsageRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "Projects" => null,
        /**String**/
        "Metrics" => null,
        /**String**/
        "From" => null,
        /**String**/
        "To" => null,
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
        if (array_key_exists("Projects", $param) and $param["Projects"] !== null) {
            if (is_bool($param["Projects"])) {
                $this->RequestParams["Projects"] = $param["Projects"] ? "true" : "false";
            } else {
                $this->RequestParams["Projects"] = $param["Projects"];
            }
        }
        if (array_key_exists("Metrics", $param) and $param["Metrics"] !== null) {
            if (is_bool($param["Metrics"])) {
                $this->RequestParams["Metrics"] = $param["Metrics"] ? "true" : "false";
            } else {
                $this->RequestParams["Metrics"] = $param["Metrics"];
            }
        }
        if (array_key_exists("From", $param) and $param["From"] !== null) {
            if (is_bool($param["From"])) {
                $this->RequestParams["From"] = $param["From"] ? "true" : "false";
            } else {
                $this->RequestParams["From"] = $param["From"];
            }
        }
        if (array_key_exists("To", $param) and $param["To"] !== null) {
            if (is_bool($param["To"])) {
                $this->RequestParams["To"] = $param["To"] ? "true" : "false";
            } else {
                $this->RequestParams["To"] = $param["To"];
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