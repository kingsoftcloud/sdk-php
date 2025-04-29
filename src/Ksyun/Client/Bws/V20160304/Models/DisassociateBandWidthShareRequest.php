<?php

namespace Ksyun\Client\Bws\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DisassociateBandWidthShareRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "BandWidthShareId" => null,
        /**String**/
        "AllocationId" => null,
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
        if (array_key_exists("BandWidthShareId", $param) and $param["BandWidthShareId"] !== null) {
            if (is_bool($param["BandWidthShareId"])) {
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthShareId"] = $param["BandWidthShareId"];
            }
        }
        if (array_key_exists("AllocationId", $param) and $param["AllocationId"] !== null) {
            if (is_bool($param["AllocationId"])) {
                $this->RequestParams["AllocationId"] = $param["AllocationId"] ? "true" : "false";
            } else {
                $this->RequestParams["AllocationId"] = $param["AllocationId"];
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