<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyCertificateWithGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AlbListenerCertGroupId" => null,
         /**String**/
        "OldCertificateId" => null,
         /**String**/
        "CertificateId" => null,
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
        if (array_key_exists("AlbListenerCertGroupId",$param) and $param["AlbListenerCertGroupId"] !== null) {
            if(is_bool($param["AlbListenerCertGroupId"])){
                $this->RequestParams["AlbListenerCertGroupId"] = $param["AlbListenerCertGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbListenerCertGroupId"] = $param["AlbListenerCertGroupId"];
            }
        }
        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            if(is_bool($param["OldCertificateId"])){
                $this->RequestParams["OldCertificateId"] = $param["OldCertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["OldCertificateId"] = $param["OldCertificateId"];
            }
        }
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            if(is_bool($param["CertificateId"])){
                $this->RequestParams["CertificateId"] = $param["CertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateId"] = $param["CertificateId"];
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