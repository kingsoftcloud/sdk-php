<?php

namespace Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;

class UpdatePresetResponse extends BaseModel
{
    /** **/
    public $UpdatePresetResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UpdatePresetResponse", $param) and $param["UpdatePresetResponse"] !== null) {
            $this->UpdatePresetResponse = $param["UpdatePresetResponse"];
        }

    }
}