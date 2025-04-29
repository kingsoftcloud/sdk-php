<?php

namespace Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;

class GetPresetListResponse extends BaseModel
{
    /** **/
    public $GetPresetListResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GetPresetListResponse", $param) and $param["GetPresetListResponse"] !== null) {
            $this->GetPresetListResponse = $param["GetPresetListResponse"];
        }

    }
}