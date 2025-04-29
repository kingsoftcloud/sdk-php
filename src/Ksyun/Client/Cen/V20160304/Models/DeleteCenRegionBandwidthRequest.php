<?php

namespace Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteCenRegionBandwidthRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "CenRegionBandwidthId" => null,
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
        if (array_key_exists("CenRegionBandwidthId", $param) and $param["CenRegionBandwidthId"] !== null) {
            if (is_bool($param["CenRegionBandwidthId"])) {
                $this->RequestParams["CenRegionBandwidthId"] = $param["CenRegionBandwidthId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenRegionBandwidthId"] = $param["CenRegionBandwidthId"];
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