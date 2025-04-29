<?php

namespace Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;

class GetLogsResponse extends BaseModel
{
    /** Res**/
    public $Res;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Res", $param) and $param["Res"] !== null) {
            $this->Res = $param["Res"];
        }

    }
}