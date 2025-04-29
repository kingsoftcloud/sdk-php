<?php

namespace Ksyun\Client\Cdn\V20200901\Models;

use Ksyun\Common\BaseModel;

class DeleteUserUsageDataExportTaskResponse extends BaseModel
{
    /** **/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}