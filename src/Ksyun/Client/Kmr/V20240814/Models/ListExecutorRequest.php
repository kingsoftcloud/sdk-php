<?php

namespace Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListExecutorRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "WorkspaceId" => null,
        /**String**/
        "JobRunId" => null,
        /**Int**/
        "PageNumber" => null,
        /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("WorkspaceId", $param) and $param["WorkspaceId"] !== null) {
            if (is_bool($param["WorkspaceId"])) {
                $this->RequestParams["WorkspaceId"] = $param["WorkspaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["WorkspaceId"] = $param["WorkspaceId"];
            }
        }
        if (array_key_exists("JobRunId", $param) and $param["JobRunId"] !== null) {
            if (is_bool($param["JobRunId"])) {
                $this->RequestParams["JobRunId"] = $param["JobRunId"] ? "true" : "false";
            } else {
                $this->RequestParams["JobRunId"] = $param["JobRunId"];
            }
        }
        if (array_key_exists("PageNumber", $param) and $param["PageNumber"] !== null) {
            if (is_bool($param["PageNumber"])) {
                $this->RequestParams["PageNumber"] = $param["PageNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNumber"] = $param["PageNumber"];
            }
        }
        if (array_key_exists("PageSize", $param) and $param["PageSize"] !== null) {
            if (is_bool($param["PageSize"])) {
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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