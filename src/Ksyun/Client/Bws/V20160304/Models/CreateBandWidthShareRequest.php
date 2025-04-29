<?php

namespace Ksyun\Client\Bws\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateBandWidthShareRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "LineId" => null,
        /**Int**/
        "BandWidth" => null,
        /**String**/
        "BandWidthShareName" => null,
        /**String**/
        "ProjectId" => null,
        /**String**/
        "ChargeType" => null,
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
        if (array_key_exists("LineId", $param) and $param["LineId"] !== null) {
            if (is_bool($param["LineId"])) {
                $this->RequestParams["LineId"] = $param["LineId"] ? "true" : "false";
            } else {
                $this->RequestParams["LineId"] = $param["LineId"];
            }
        }
        if (array_key_exists("BandWidth", $param) and $param["BandWidth"] !== null) {
            if (is_bool($param["BandWidth"])) {
                $this->RequestParams["BandWidth"] = $param["BandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidth"] = $param["BandWidth"];
            }
        }
        if (array_key_exists("BandWidthShareName", $param) and $param["BandWidthShareName"] !== null) {
            if (is_bool($param["BandWidthShareName"])) {
                $this->RequestParams["BandWidthShareName"] = $param["BandWidthShareName"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthShareName"] = $param["BandWidthShareName"];
            }
        }
        if (array_key_exists("ProjectId", $param) and $param["ProjectId"] !== null) {
            if (is_bool($param["ProjectId"])) {
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ChargeType", $param) and $param["ChargeType"] !== null) {
            if (is_bool($param["ChargeType"])) {
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
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