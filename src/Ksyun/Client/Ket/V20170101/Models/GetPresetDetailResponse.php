<?php

namespace Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;

class GetPresetDetailResponse extends BaseModel
{
    /** **/
    public $GetPresetDetailResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GetPresetDetailResponse", $param) and $param["GetPresetDetailResponse"] !== null) {
            $this->GetPresetDetailResponse = $param["GetPresetDetailResponse"];
        }

    }
}