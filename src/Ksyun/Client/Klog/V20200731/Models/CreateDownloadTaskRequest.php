<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDownloadTaskRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "From" => null,
        /**String**/
        "To" => null,
        /**String**/
        "LogPoolName" => null,
        /**String**/
        "ProjectName" => null,
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
        if (array_key_exists("LogPoolName", $param) and $param["LogPoolName"] !== null) {
            if (is_bool($param["LogPoolName"])) {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogPoolName"] = $param["LogPoolName"];
            }
        }
        if (array_key_exists("ProjectName", $param) and $param["ProjectName"] !== null) {
            if (is_bool($param["ProjectName"])) {
                $this->RequestParams["ProjectName"] = $param["ProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectName"] = $param["ProjectName"];
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