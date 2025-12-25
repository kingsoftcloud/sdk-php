<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetBillingModeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**String**/
        "CdnType" => null,
         /**String**/
        "DomainIds" => null,
         /**String**/
        "Regions" => null,
         /**String**/
        "BillingMode" => null,
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            if(is_bool($param["EndTime"])){
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
            }
        }
        if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
            if(is_bool($param["CdnType"])){
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("DomainIds",$param) and $param["DomainIds"] !== null) {
            if(is_bool($param["DomainIds"])){
                $this->RequestParams["DomainIds"] = $param["DomainIds"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainIds"] = $param["DomainIds"];
            }
        }
        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            if(is_bool($param["Regions"])){
                $this->RequestParams["Regions"] = $param["Regions"] ? "true" : "false";
            } else {
                $this->RequestParams["Regions"] = $param["Regions"];
            }
        }
        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            if(is_bool($param["BillingMode"])){
                $this->RequestParams["BillingMode"] = $param["BillingMode"] ? "true" : "false";
            } else {
                $this->RequestParams["BillingMode"] = $param["BillingMode"];
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