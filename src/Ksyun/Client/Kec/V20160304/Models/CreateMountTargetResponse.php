<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateMountTargetResponse extends BaseModel
{
    /** **/
    public $CreateMountTargetResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CreateMountTargetResponse", $param) and $param["CreateMountTargetResponse"] !== null) {
            $this->CreateMountTargetResponse = $param["CreateMountTargetResponse"];
        }

    }
}