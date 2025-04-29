<?php

namespace Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCenRegionBandwidthRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CenId" => null,
        /**String**/
        "RegionA" => null,
        /**String**/
        "RegionB" => null,
        /**String**/
        "CenBandWidthPackageId" => null,
        /**Int**/
        "BandWidth" => null,
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
        if (array_key_exists("CenId", $param) and $param["CenId"] !== null) {
            if (is_bool($param["CenId"])) {
                $this->RequestParams["CenId"] = $param["CenId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenId"] = $param["CenId"];
            }
        }
        if (array_key_exists("RegionA", $param) and $param["RegionA"] !== null) {
            if (is_bool($param["RegionA"])) {
                $this->RequestParams["RegionA"] = $param["RegionA"] ? "true" : "false";
            } else {
                $this->RequestParams["RegionA"] = $param["RegionA"];
            }
        }
        if (array_key_exists("RegionB", $param) and $param["RegionB"] !== null) {
            if (is_bool($param["RegionB"])) {
                $this->RequestParams["RegionB"] = $param["RegionB"] ? "true" : "false";
            } else {
                $this->RequestParams["RegionB"] = $param["RegionB"];
            }
        }
        if (array_key_exists("CenBandWidthPackageId", $param) and $param["CenBandWidthPackageId"] !== null) {
            if (is_bool($param["CenBandWidthPackageId"])) {
                $this->RequestParams["CenBandWidthPackageId"] = $param["CenBandWidthPackageId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenBandWidthPackageId"] = $param["CenBandWidthPackageId"];
            }
        }
        if (array_key_exists("BandWidth", $param) and $param["BandWidth"] !== null) {
            if (is_bool($param["BandWidth"])) {
                $this->RequestParams["BandWidth"] = $param["BandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidth"] = $param["BandWidth"];
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