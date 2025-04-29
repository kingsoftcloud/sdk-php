<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateProjectRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ProjectName" => null,
        /**String**/
        "Description" => null,
        /**String**/
        "Region" => null,
        /**Int**/
        "IamProjectId" => null,
        /**String**/
        "IamProjectName" => null,
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
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            if (is_bool($param["Description"])) {
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("Region", $param) and $param["Region"] !== null) {
            if (is_bool($param["Region"])) {
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
            }
        }
        if (array_key_exists("IamProjectId", $param) and $param["IamProjectId"] !== null) {
            if (is_bool($param["IamProjectId"])) {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["IamProjectId"] = $param["IamProjectId"];
            }
        }
        if (array_key_exists("IamProjectName", $param) and $param["IamProjectName"] !== null) {
            if (is_bool($param["IamProjectName"])) {
                $this->RequestParams["IamProjectName"] = $param["IamProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["IamProjectName"] = $param["IamProjectName"];
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