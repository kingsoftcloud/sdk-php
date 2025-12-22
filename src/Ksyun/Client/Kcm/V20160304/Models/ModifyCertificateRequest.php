<?php
namespace  Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyCertificateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CertificateId" => null,
         /**String**/
        "CertificateName" => null,
         /**String**/
        "PrivateKey" => null,
         /**String**/
        "PublicKey" => null,
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