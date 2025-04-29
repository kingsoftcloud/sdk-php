<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;

class StartEtlTaskResponse extends BaseModel
{
    /** **/
    public $Action;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Action", $param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

    }
}