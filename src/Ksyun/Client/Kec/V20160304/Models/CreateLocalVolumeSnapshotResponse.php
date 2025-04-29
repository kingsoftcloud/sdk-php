<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateLocalVolumeSnapshotResponse extends BaseModel
{
    /** **/
    public $RequestId;

    /** **/
    public $LocalVolumeSnapshotId;

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
        if (array_key_exists("LocalVolumeSnapshotId", $param) and $param["LocalVolumeSnapshotId"] !== null) {
            $this->LocalVolumeSnapshotId = $param["LocalVolumeSnapshotId"];
        }

    }
}