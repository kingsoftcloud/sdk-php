<?php

namespace Ksyun\Client\Kcm\V20160304\Models;

use Ksyun\Common\BaseModel;

class ApplyCertificateResponse extends BaseModel
{
    /** **/
    public $ApplyCertificateResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ApplyCertificateResponse", $param) and $param["ApplyCertificateResponse"] !== null) {
            $this->ApplyCertificateResponse = $param["ApplyCertificateResponse"];
        }

    }
}