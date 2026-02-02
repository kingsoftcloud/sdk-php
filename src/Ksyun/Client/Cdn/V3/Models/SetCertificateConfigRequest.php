<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetCertificateConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Enable" => null,
         /**String**/
        "DomainIds" => null,
         /**String**/
        "CertificateId" => null,
         /**String**/
        "CertificateName" => null,
         /**String**/
        "ServerCertificate" => null,
         /**String**/
        "PrivateKey" => null,
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            if(is_bool($param["Enable"])){
                $this->RequestParams["Enable"] = $param["Enable"] ? "true" : "false";
            } else {
                $this->RequestParams["Enable"] = $param["Enable"];
            }
        }
        if (array_key_exists("DomainIds",$param) and $param["DomainIds"] !== null) {
            if(is_bool($param["DomainIds"])){
                $this->RequestParams["DomainIds"] = $param["DomainIds"] ? "true" : "false";
            } else {
                $this->RequestParams["DomainIds"] = $param["DomainIds"];
            }
        }
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            if(is_bool($param["CertificateId"])){
                $this->RequestParams["CertificateId"] = $param["CertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateId"] = $param["CertificateId"];
            }
        }
        if (array_key_exists("CertificateName",$param) and $param["CertificateName"] !== null) {
            if(is_bool($param["CertificateName"])){
                $this->RequestParams["CertificateName"] = $param["CertificateName"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateName"] = $param["CertificateName"];
            }
        }
        if (array_key_exists("ServerCertificate",$param) and $param["ServerCertificate"] !== null) {
            if(is_bool($param["ServerCertificate"])){
                $this->RequestParams["ServerCertificate"] = $param["ServerCertificate"] ? "true" : "false";
            } else {
                $this->RequestParams["ServerCertificate"] = $param["ServerCertificate"];
            }
        }
        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            if(is_bool($param["PrivateKey"])){
                $this->RequestParams["PrivateKey"] = $param["PrivateKey"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateKey"] = $param["PrivateKey"];
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