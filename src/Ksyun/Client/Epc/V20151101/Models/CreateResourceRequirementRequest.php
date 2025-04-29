<?php

namespace Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateResourceRequirementRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AvailabilityZone" => null,
        /**Int**/
        "RequirementCount" => null,
        /**String**/
        "ProjectName" => null,
        /**String**/
        "UsageDate" => null,
        /**String**/
        "Description" => null,
        /**String**/
        "HostType" => null,
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
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            if (is_bool($param["AvailabilityZone"])) {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("RequirementCount", $param) and $param["RequirementCount"] !== null) {
            if (is_bool($param["RequirementCount"])) {
                $this->RequestParams["RequirementCount"] = $param["RequirementCount"] ? "true" : "false";
            } else {
                $this->RequestParams["RequirementCount"] = $param["RequirementCount"];
            }
        }
        if (array_key_exists("ProjectName", $param) and $param["ProjectName"] !== null) {
            if (is_bool($param["ProjectName"])) {
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
            }
        }
        if (array_key_exists("UsageDate", $param) and $param["UsageDate"] !== null) {
            if (is_bool($param["UsageDate"])) {
                $this->RequestParams["UsageDate"] = $param["UsageDate"] ? "true" : "false";
            } else {
                $this->RequestParams["UsageDate"] = $param["UsageDate"];
            }
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            if (is_bool($param["Description"])) {
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("HostType", $param) and $param["HostType"] !== null) {
            if (is_bool($param["HostType"])) {
                $this->RequestParams["HostType"] = $param["HostType"] ? "true" : "false";
            } else {
                $this->RequestParams["HostType"] = $param["HostType"];
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