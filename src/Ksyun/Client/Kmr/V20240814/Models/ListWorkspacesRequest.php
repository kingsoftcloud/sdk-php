<?php

namespace Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListWorkspacesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "NameOrId" => null,
        /**Array**/
        "Status" => null,
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
        if (array_key_exists("NameOrId", $param) and $param["NameOrId"] !== null) {
            if (is_bool($param["NameOrId"])) {
                $this->RequestParams["NameOrId"] = $param["NameOrId"] ? "true" : "false";
            } else {
                $this->RequestParams["NameOrId"] = $param["NameOrId"];
            }
        }
        if (array_key_exists("Status", $param) and $param["Status"] !== null) {
            if (is_bool($param["Status"])) {
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
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