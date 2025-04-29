<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteMountTargetResponse extends BaseModel
{
    /** **/
    public $DeleteMountTargetResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DeleteMountTargetResponse", $param) and $param["DeleteMountTargetResponse"] !== null) {
            $this->DeleteMountTargetResponse = $param["DeleteMountTargetResponse"];
        }

    }
}