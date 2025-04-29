<?php

namespace Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;

class PresetResponse extends BaseModel
{
    /** **/
    public $PresetResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PresetResponse", $param) and $param["PresetResponse"] !== null) {
            $this->PresetResponse = $param["PresetResponse"];
        }

    }
}