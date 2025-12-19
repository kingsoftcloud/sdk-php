<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetCdnDomainsRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "PageNumber" => null,
         /**String**/
        "DomainName" => null,
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "DomainStatus" => null,
         /**String**/
        "CdnType" => null,
         /**String**/
        "FuzzyMatch" => null,
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            if(is_bool($param["PageNumber"])){
                $this->RequestParams["PageNumber"] = $param["PageNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNumber"] = $param["PageNumber"];
            }
        }
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            if(is_bool($param["DomainName"])){
                $this->RequestParams["DomainName"] = $param["DomainName"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainName"] = $param["DomainName"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("DomainStatus",$param) and $param["DomainStatus"] !== null) {
            if(is_bool($param["DomainStatus"])){
                $this->RequestParams["DomainStatus"] = $param["DomainStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainStatus"] = $param["DomainStatus"];
            }
        }
        if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
            if(is_bool($param["CdnType"])){
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("FuzzyMatch",$param) and $param["FuzzyMatch"] !== null) {
            if(is_bool($param["FuzzyMatch"])){
                $this->RequestParams["FuzzyMatch"] = $param["FuzzyMatch"] ? "true" : "false";
            } else {
                $this->RequestParams["FuzzyMatch"] = $param["FuzzyMatch"];
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