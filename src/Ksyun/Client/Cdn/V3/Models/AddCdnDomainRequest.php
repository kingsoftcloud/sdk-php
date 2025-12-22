<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddCdnDomainRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainName" => null,
         /**String**/
        "CdnType" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "CdnProtocol" => null,
         /**String**/
        "Regions" => null,
         /**String**/
        "OriginType" => null,
         /**String**/
        "OriginProtocol" => null,
         /**String**/
        "Origin" => null,
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            if(is_bool($param["DomainName"])){
                $this->RequestParams["DomainName"] = $param["DomainName"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainName"] = $param["DomainName"];
            }
        }
        if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
            if(is_bool($param["CdnType"])){
                $this->RequestParams["CdnType"] = $param["CdnType"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnType"] = $param["CdnType"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("CdnProtocol",$param) and $param["CdnProtocol"] !== null) {
            if(is_bool($param["CdnProtocol"])){
                $this->RequestParams["CdnProtocol"] = $param["CdnProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["CdnProtocol"] = $param["CdnProtocol"];
            }
        }
        if (array_key_exists("Regions",$param) and $param["Regions"] !== null) {
            if(is_bool($param["Regions"])){
                $this->RequestParams["Regions"] = $param["Regions"] ? "true" : "false";
            } else {
                $this->RequestParams["Regions"] = $param["Regions"];
            }
        }
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            if(is_bool($param["OriginType"])){
                $this->RequestParams["OriginType"] = $param["OriginType"] ? "true" : "false";
            } else {
                $this->RequestParams["OriginType"] = $param["OriginType"];
            }
        }
        if (array_key_exists("OriginProtocol",$param) and $param["OriginProtocol"] !== null) {
            if(is_bool($param["OriginProtocol"])){
                $this->RequestParams["OriginProtocol"] = $param["OriginProtocol"] ? "true" : "false";
            } else {
                $this->RequestParams["OriginProtocol"] = $param["OriginProtocol"];
            }
        }
        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            if(is_bool($param["Origin"])){
                $this->RequestParams["Origin"] = $param["Origin"] ? "true" : "false";
            } else {
                $this->RequestParams["Origin"] = $param["Origin"];
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