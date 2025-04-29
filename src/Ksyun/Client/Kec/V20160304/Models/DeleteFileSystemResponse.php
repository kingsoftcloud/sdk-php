<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteFileSystemResponse extends BaseModel
{
    /** **/
    public $DeleteFileSystemResponse;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DeleteFileSystemResponse", $param) and $param["DeleteFileSystemResponse"] !== null) {
            $this->DeleteFileSystemResponse = $param["DeleteFileSystemResponse"];
        }

    }
}