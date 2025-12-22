<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCertificateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CertificateName" => null,
         /**String**/
        "PrivateKey" => null,
         /**String**/
        "PublicKey" => null,
         /**String**/
        "CertificateType" => null,
         /**String**/
        "Source" => null,
         /**String**/
        "SslCertificateId" => null,
         /**String**/
        "Description" => null,
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
        if (array_key_exists("CertificateName",$param) and $param["CertificateName"] !== null) {
            if(is_bool($param["CertificateName"])){
                $this->RequestParams["CertificateName"] = $param["CertificateName"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateName"] = $param["CertificateName"];
            }
        }
        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            if(is_bool($param["PrivateKey"])){
                $this->RequestParams["PrivateKey"] = $param["PrivateKey"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateKey"] = $param["PrivateKey"];
            }
        }
        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            if(is_bool($param["PublicKey"])){
                $this->RequestParams["PublicKey"] = $param["PublicKey"] ? "true" : "false";
            } else {
                $this->RequestParams["PublicKey"] = $param["PublicKey"];
            }
        }
        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            if(is_bool($param["CertificateType"])){
                $this->RequestParams["CertificateType"] = $param["CertificateType"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateType"] = $param["CertificateType"];
            }
        }
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            if(is_bool($param["Source"])){
                $this->RequestParams["Source"] = $param["Source"] ? "true" : "false";
            } else {
                $this->RequestParams["Source"] = $param["Source"];
            }
        }
        if (array_key_exists("SslCertificateId",$param) and $param["SslCertificateId"] !== null) {
            if(is_bool($param["SslCertificateId"])){
                $this->RequestParams["SslCertificateId"] = $param["SslCertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["SslCertificateId"] = $param["SslCertificateId"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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