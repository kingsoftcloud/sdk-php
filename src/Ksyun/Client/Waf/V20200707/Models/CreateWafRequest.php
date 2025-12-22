<?php
namespace  Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateWafRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "WafType" => null,
         /**Int**/
        "BillType" => null,
         /**Int**/
        "PurchaseTime" => null,
         /**Int**/
        "DomainBag" => null,
         /**Int**/
        "BandWidthIpv4" => null,
         /**Int**/
        "StorageSize" => null,
         /**Int**/
        "ProjectId" => null,
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
        if (array_key_exists("WafType",$param) and $param["WafType"] !== null) {
            if(is_bool($param["WafType"])){
                $this->RequestParams["WafType"] = $param["WafType"] ? "true" : "false";
            } else {
                $this->RequestParams["WafType"] = $param["WafType"];
            }
        }
        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            if(is_bool($param["BillType"])){
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
            }
        }
        if (array_key_exists("PurchaseTime",$param) and $param["PurchaseTime"] !== null) {
            if(is_bool($param["PurchaseTime"])){
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }
        if (array_key_exists("DomainBag",$param) and $param["DomainBag"] !== null) {
            if(is_bool($param["DomainBag"])){
                $this->RequestParams["DomainBag"] = $param["DomainBag"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainBag"] = $param["DomainBag"];
            }
        }
        if (array_key_exists("BandWidthIpv4",$param) and $param["BandWidthIpv4"] !== null) {
            if(is_bool($param["BandWidthIpv4"])){
                $this->RequestParams["BandWidthIpv4"] = $param["BandWidthIpv4"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidthIpv4"] = $param["BandWidthIpv4"];
            }
        }
        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            if(is_bool($param["StorageSize"])){
                $this->RequestParams["StorageSize"] = $param["StorageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageSize"] = $param["StorageSize"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
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