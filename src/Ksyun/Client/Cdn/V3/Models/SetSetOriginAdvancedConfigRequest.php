<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetSetOriginAdvancedConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DomainId" => null,
         /**String**/
        "Enable" => null,
         /**String**/
        "OriginType" => null,
         /**String**/
        "Origin" => null,
         /**String**/
        "BackupOriginType" => null,
         /**String**/
        "BackupOrigin" => null,
         /**String**/
        "OriginPolicy" => null,
         /**String**/
        "OriginPolicyBestCount" => null,
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
        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            if(is_bool($param["DomainId"])){
                $this->RequestParams["DomainId"] = $param["DomainId"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainId"] = $param["DomainId"];
            }
        }
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            if(is_bool($param["Enable"])){
                $this->RequestParams["Enable"] = $param["Enable"] ? "true" : "false";
            } else {
                $this->RequestParams["Enable"] = $param["Enable"];
            }
        }
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            if(is_bool($param["OriginType"])){
                $this->RequestParams["OriginType"] = $param["OriginType"] ? "true" : "false";
            } else {
                $this->RequestParams["OriginType"] = $param["OriginType"];
            }
        }
        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            if(is_bool($param["Origin"])){
                $this->RequestParams["Origin"] = $param["Origin"] ? "true" : "false";
            } else {
                $this->RequestParams["Origin"] = $param["Origin"];
            }
        }
        if (array_key_exists("BackupOriginType",$param) and $param["BackupOriginType"] !== null) {
            if(is_bool($param["BackupOriginType"])){
                $this->RequestParams["BackupOriginType"] = $param["BackupOriginType"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupOriginType"] = $param["BackupOriginType"];
            }
        }
        if (array_key_exists("BackupOrigin",$param) and $param["BackupOrigin"] !== null) {
            if(is_bool($param["BackupOrigin"])){
                $this->RequestParams["BackupOrigin"] = $param["BackupOrigin"] ? "true" : "false";
            } else {
                $this->RequestParams["BackupOrigin"] = $param["BackupOrigin"];
            }
        }
        if (array_key_exists("OriginPolicy",$param) and $param["OriginPolicy"] !== null) {
            if(is_bool($param["OriginPolicy"])){
                $this->RequestParams["OriginPolicy"] = $param["OriginPolicy"] ? "true" : "false";
            } else {
                $this->RequestParams["OriginPolicy"] = $param["OriginPolicy"];
            }
        }
        if (array_key_exists("OriginPolicyBestCount",$param) and $param["OriginPolicyBestCount"] !== null) {
            if(is_bool($param["OriginPolicyBestCount"])){
                $this->RequestParams["OriginPolicyBestCount"] = $param["OriginPolicyBestCount"] ? "true" : "false";
            } else {
                $this->RequestParams["OriginPolicyBestCount"] = $param["OriginPolicyBestCount"];
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