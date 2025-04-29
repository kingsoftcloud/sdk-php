<?php

namespace Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDBParameterGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBParameterGroupId" => null,
        /**Int**/
        "Marker" => null,
        /**Int**/
        "MaxRecords" => null,
        /**String**/
        "Source" => null,
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
        if (array_key_exists("DBParameterGroupId", $param) and $param["DBParameterGroupId"] !== null) {
            if (is_bool($param["DBParameterGroupId"])) {
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"];
            }
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            if (is_bool($param["Marker"])) {
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxRecords", $param) and $param["MaxRecords"] !== null) {
            if (is_bool($param["MaxRecords"])) {
                $this->RequestParams["MaxRecords"] = $param["MaxRecords"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxRecords"] = $param["MaxRecords"];
            }
        }
        if (array_key_exists("Source", $param) and $param["Source"] !== null) {
            if (is_bool($param["Source"])) {
                $this->RequestParams["Source"] = $param["Source"] ? "true" : "false";
            } else {
                $this->RequestParams["Source"] = $param["Source"];
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