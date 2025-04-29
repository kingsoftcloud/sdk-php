<?php

namespace Ksyun\Client\Rabbitmq\V20191017\Models;

use Ksyun\Common\BaseModel;

class DescribeRegionsResponse extends BaseModel
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