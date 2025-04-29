<?php

namespace Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class ListCertificatesResponse extends BaseModel
{
    /** **/
    public $ListCertificatesResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListCertificatesResponse", $param) and $param["ListCertificatesResponse"] !== null) {
            $this->ListCertificatesResponse = $param["ListCertificatesResponse"];
        }

    }
}