<?php

namespace Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;

class ListInstanceResponse extends BaseModel
{
    /** 1**/
public $1;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("1", $param) and $param["1"] !== null) {
            $this->1 = $param["1"];
            }

    }
}