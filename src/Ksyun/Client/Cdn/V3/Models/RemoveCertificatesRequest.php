<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RemoveCertificatesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CertificateIds" => null,
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
        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            if(is_bool($param["CertificateIds"])){
                $this->RequestParams["CertificateIds"] = $param["CertificateIds"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateIds"] = $param["CertificateIds"];
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