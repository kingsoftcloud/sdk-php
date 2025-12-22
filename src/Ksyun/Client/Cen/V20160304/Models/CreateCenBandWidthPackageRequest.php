<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCenBandWidthPackageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CenId" => null,
         /**String**/
        "CenBandWidthPackageName" => null,
         /**String**/
        "LocalAreaId" => null,
         /**String**/
        "RemoteAreaId" => null,
         /**Int**/
        "PackageBandWidth" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "ChargeType" => null,
         /**Int**/
        "PurchaseTime" => null,
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
        if (array_key_exists("CenId",$param) and $param["CenId"] !== null) {
            if(is_bool($param["CenId"])){
                $this->RequestParams["CenId"] = $param["CenId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenId"] = $param["CenId"];
            }
        }
        if (array_key_exists("CenBandWidthPackageName",$param) and $param["CenBandWidthPackageName"] !== null) {
            if(is_bool($param["CenBandWidthPackageName"])){
                $this->RequestParams["CenBandWidthPackageName"] = $param["CenBandWidthPackageName"] ? "true" : "false";
            } else {
                $this->RequestParams["CenBandWidthPackageName"] = $param["CenBandWidthPackageName"];
            }
        }
        if (array_key_exists("LocalAreaId",$param) and $param["LocalAreaId"] !== null) {
            if(is_bool($param["LocalAreaId"])){
                $this->RequestParams["LocalAreaId"] = $param["LocalAreaId"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalAreaId"] = $param["LocalAreaId"];
            }
        }
        if (array_key_exists("RemoteAreaId",$param) and $param["RemoteAreaId"] !== null) {
            if(is_bool($param["RemoteAreaId"])){
                $this->RequestParams["RemoteAreaId"] = $param["RemoteAreaId"] ? "true" : "false";
            } else {
                $this->RequestParams["RemoteAreaId"] = $param["RemoteAreaId"];
            }
        }
        if (array_key_exists("PackageBandWidth",$param) and $param["PackageBandWidth"] !== null) {
            if(is_bool($param["PackageBandWidth"])){
                $this->RequestParams["PackageBandWidth"] = $param["PackageBandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["PackageBandWidth"] = $param["PackageBandWidth"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("PurchaseTime",$param) and $param["PurchaseTime"] !== null) {
            if(is_bool($param["PurchaseTime"])){
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}