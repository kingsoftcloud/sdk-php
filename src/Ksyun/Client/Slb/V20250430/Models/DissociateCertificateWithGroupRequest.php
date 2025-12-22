<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DissociateCertificateWithGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ListenerCertGroupId" => null,
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
        if (array_key_exists("ListenerCertGroupId",$param) and $param["ListenerCertGroupId"] !== null) {
            if(is_bool($param["ListenerCertGroupId"])){
                $this->RequestParams["ListenerCertGroupId"] = $param["ListenerCertGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerCertGroupId"] = $param["ListenerCertGroupId"];
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