<?php

namespace Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateRecordDataResponse extends BaseModel
{
    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }

    }
}