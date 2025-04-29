<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateHostHeaderRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ListenerId" => null,
        /**String**/
        "CertificateId" => null,
        /**String**/
        "HostHeader" => null,
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
        if (array_key_exists("ListenerId", $param) and $param["ListenerId"] !== null) {
            if (is_bool($param["ListenerId"])) {
                $this->RequestParams["ListenerId"] = $param["ListenerId"] ? "true" : "false";
            } else {
                $this->RequestParams["ListenerId"] = $param["ListenerId"];
            }
        }
        if (array_key_exists("CertificateId", $param) and $param["CertificateId"] !== null) {
            if (is_bool($param["CertificateId"])) {
                $this->RequestParams["CertificateId"] = $param["CertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateId"] = $param["CertificateId"];
            }
        }
        if (array_key_exists("HostHeader", $param) and $param["HostHeader"] !== null) {
            if (is_bool($param["HostHeader"])) {
                $this->RequestParams["HostHeader"] = $param["HostHeader"] ? "true" : "false";
            } else {
                $this->RequestParams["HostHeader"] = $param["HostHeader"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}