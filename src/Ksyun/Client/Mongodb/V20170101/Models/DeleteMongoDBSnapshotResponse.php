<?php

namespace Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DeleteMongoDBSnapshotResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $SnapshotId;

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
        if (array_key_exists("SnapshotId", $param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

    }
}