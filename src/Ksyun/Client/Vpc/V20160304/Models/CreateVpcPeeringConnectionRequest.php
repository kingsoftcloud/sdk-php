<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateVpcPeeringConnectionRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "VpcId" => null,
        /**String**/
        "PeeringName" => null,
        /**String**/
        "PeerVpcId" => null,
        /**String**/
        "Region" => null,
        /**String**/
        "PeerRegion" => null,
        /**String**/
        "PeerAccountId" => null,
        /**Int**/
        "BandWidth" => null,
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
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            if (is_bool($param["VpcId"])) {
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("PeeringName", $param) and $param["PeeringName"] !== null) {
            if (is_bool($param["PeeringName"])) {
                $this->RequestParams["PeeringName"] = $param["PeeringName"] ? "true" : "false";
            } else {
                $this->RequestParams["PeeringName"] = $param["PeeringName"];
            }
        }
        if (array_key_exists("PeerVpcId", $param) and $param["PeerVpcId"] !== null) {
            if (is_bool($param["PeerVpcId"])) {
                $this->RequestParams["PeerVpcId"] = $param["PeerVpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["PeerVpcId"] = $param["PeerVpcId"];
            }
        }
        if (array_key_exists("Region", $param) and $param["Region"] !== null) {
            if (is_bool($param["Region"])) {
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
            }
        }
        if (array_key_exists("PeerRegion", $param) and $param["PeerRegion"] !== null) {
            if (is_bool($param["PeerRegion"])) {
                $this->RequestParams["PeerRegion"] = $param["PeerRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["PeerRegion"] = $param["PeerRegion"];
            }
        }
        if (array_key_exists("PeerAccountId", $param) and $param["PeerAccountId"] !== null) {
            if (is_bool($param["PeerAccountId"])) {
                $this->RequestParams["PeerAccountId"] = $param["PeerAccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["PeerAccountId"] = $param["PeerAccountId"];
            }
        }
        if (array_key_exists("BandWidth", $param) and $param["BandWidth"] !== null) {
            if (is_bool($param["BandWidth"])) {
                $this->RequestParams["BandWidth"] = $param["BandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidth"] = $param["BandWidth"];
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