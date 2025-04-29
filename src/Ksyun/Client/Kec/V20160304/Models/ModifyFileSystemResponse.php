<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyFileSystemResponse extends BaseModel
{
    /** **/
    public $ModifyFileSystemResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ModifyFileSystemResponse", $param) and $param["ModifyFileSystemResponse"] !== null) {
            $this->ModifyFileSystemResponse = $param["ModifyFileSystemResponse"];
        }

    }
}