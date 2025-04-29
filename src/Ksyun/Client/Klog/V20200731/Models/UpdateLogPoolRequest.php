<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateLogPoolRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ProjectName" => null,
        /**String**/
        "LogPoolName" => null,
        /**Int**/
        "RetentionDays" => null,
        /**Int**/
        "Partitions" => null,
        /**String**/
        "Description" => null,
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
        if (array_key_exists("ProjectName", $param) and $param["ProjectName"] !== null) {
            if (is_bool($param["ProjectName"])) {
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("LogPoolName", $param) and $param["LogPoolName"] !== null) {
            if (is_bool($param["LogPoolName"])) {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"];
            }
        }
        if (array_key_exists("RetentionDays", $param) and $param["RetentionDays"] !== null) {
            if (is_bool($param["RetentionDays"])) {
                $this->RequestParams["RetentionDays"] = $param["RetentionDays"] ? "true" : "false";
            } else {
                $this->RequestParams["RetentionDays"] = $param["RetentionDays"];
            }
        }
        if (array_key_exists("Partitions", $param) and $param["Partitions"] !== null) {
            if (is_bool($param["Partitions"])) {
                $this->RequestParams["Partitions"] = $param["Partitions"] ? "true" : "false";
            } else {
                $this->RequestParams["Partitions"] = $param["Partitions"];
            }
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            if (is_bool($param["Description"])) {
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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