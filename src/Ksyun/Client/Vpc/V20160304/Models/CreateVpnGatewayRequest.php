<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateVpnGatewayRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VpcId" => null,
        /**Int**/
        "BandWidth" => null,
        /**String**/
        "VpnGatewayName" => null,
        /**String**/
        "ProjectId" => null,
        /**String**/
        "ChargeType" => null,
        /**Int**/
        "PurchaseTime" => null,
        /**String**/
        "VpnGatewayVersion" => null,
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
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("BandWidth", $param) and $param["BandWidth"] !== null) {
            if (is_bool($param["BandWidth"])) {
                $this->RequestParams["BandWidth"] = $param["BandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidth"] = $param["BandWidth"];
            }
        }
        if (array_key_exists("VpnGatewayName", $param) and $param["VpnGatewayName"] !== null) {
            if (is_bool($param["VpnGatewayName"])) {
                $this->RequestParams["VpnGatewayName"] = $param["VpnGatewayName"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGatewayName"] = $param["VpnGatewayName"];
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
        if (array_key_exists("PurchaseTime", $param) and $param["PurchaseTime"] !== null) {
            if (is_bool($param["PurchaseTime"])) {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }
        if (array_key_exists("VpnGatewayVersion", $param) and $param["VpnGatewayVersion"] !== null) {
            if (is_bool($param["VpnGatewayVersion"])) {
                $this->RequestParams["VpnGatewayVersion"] = $param["VpnGatewayVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["VpnGatewayVersion"] = $param["VpnGatewayVersion"];
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