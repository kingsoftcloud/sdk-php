<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ApplyCertificateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "MainDomain" => null,
         /**String**/
        "CertificateCode" => null,
         /**Int**/
        "YearLength" => null,
         /**Int**/
        "DomainCount" => null,
         /**Int**/
        "WildcardCount" => null,
         /**String**/
        "ProductId" => null,
         /**String**/
        "SubOrderId" => null,
         /**Int**/
        "ProjectId" => null,
         /**Int**/
        "BillType" => null,
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
        if (array_key_exists("MainDomain",$param) and $param["MainDomain"] !== null) {
            if(is_bool($param["MainDomain"])){
                $this->RequestParams["MainDomain"] = $param["MainDomain"] ? "true" : "false";
            } else {
                $this->RequestParams["MainDomain"] = $param["MainDomain"];
            }
        }
        if (array_key_exists("CertificateCode",$param) and $param["CertificateCode"] !== null) {
            if(is_bool($param["CertificateCode"])){
                $this->RequestParams["CertificateCode"] = $param["CertificateCode"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateCode"] = $param["CertificateCode"];
            }
        }
        if (array_key_exists("YearLength",$param) and $param["YearLength"] !== null) {
            if(is_bool($param["YearLength"])){
                $this->RequestParams["YearLength"] = $param["YearLength"] ? "true" : "false";
            } else {
                $this->RequestParams["YearLength"] = $param["YearLength"];
            }
        }
        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            if(is_bool($param["DomainCount"])){
                $this->RequestParams["DomainCount"] = $param["DomainCount"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainCount"] = $param["DomainCount"];
            }
        }
        if (array_key_exists("WildcardCount",$param) and $param["WildcardCount"] !== null) {
            if(is_bool($param["WildcardCount"])){
                $this->RequestParams["WildcardCount"] = $param["WildcardCount"] ? "true" : "false";
            } else {
                $this->RequestParams["WildcardCount"] = $param["WildcardCount"];
            }
        }
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            if(is_bool($param["ProductId"])){
                $this->RequestParams["ProductId"] = $param["ProductId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductId"] = $param["ProductId"];
            }
        }
        if (array_key_exists("SubOrderId",$param) and $param["SubOrderId"] !== null) {
            if(is_bool($param["SubOrderId"])){
                $this->RequestParams["SubOrderId"] = $param["SubOrderId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubOrderId"] = $param["SubOrderId"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            if(is_bool($param["BillType"])){
                $this->RequestParams["BillType"] = $param["BillType"] ? "true" : "false";
            } else {
                $this->RequestParams["BillType"] = $param["BillType"];
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