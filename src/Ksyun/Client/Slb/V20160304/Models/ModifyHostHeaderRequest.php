<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyHostHeaderRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "HostHeaderId" => null,
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
        if (array_key_exists("HostHeaderId", $param) and $param["HostHeaderId"] !== null) {
            if (is_bool($param["HostHeaderId"])) {
                $this->RequestParams["HostHeaderId"] = $param["HostHeaderId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostHeaderId"] = $param["HostHeaderId"];
            }
        }
        if (array_key_exists("CertificateId", $param) and $param["CertificateId"] !== null) {
            if (is_bool($param["CertificateId"])) {
                $this->RequestParams["CertificateId"] = $param["CertificateId"] ? "true" : "false";
            } else {
                $this->RequestParams["CertificateId"] = $param["CertificateId"];
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