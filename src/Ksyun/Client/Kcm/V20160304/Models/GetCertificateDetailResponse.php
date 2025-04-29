<?php

namespace Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class GetCertificateDetailResponse extends BaseModel
{
    /** **/
    public $GetCertificateDetailResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GetCertificateDetailResponse", $param) and $param["GetCertificateDetailResponse"] !== null) {
            $this->GetCertificateDetailResponse = $param["GetCertificateDetailResponse"];
        }

    }
}