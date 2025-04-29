<?php

namespace Ksyun\Client\Waf\V20200707\Models;

use Ksyun\Common\BaseModel;

class CreateAccessControlRuleResponse extends BaseModel
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