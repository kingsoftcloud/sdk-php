<?php

namespace Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteRecordDataResponse extends BaseModel
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