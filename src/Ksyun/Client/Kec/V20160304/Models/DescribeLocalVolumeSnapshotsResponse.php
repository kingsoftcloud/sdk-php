<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeLocalVolumeSnapshotsResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $LocalVolumeSnapshotCount;

         /**Object **/
         public  $LocalVolumeSnapshotSet;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("LocalVolumeSnapshotCount",$param) and $param["LocalVolumeSnapshotCount"] !== null) {
                $this->LocalVolumeSnapshotCount = $param["LocalVolumeSnapshotCount"];
            }
            if (array_key_exists("LocalVolumeSnapshotSet",$param) and $param["LocalVolumeSnapshotSet"] !== null) {
                $this->LocalVolumeSnapshotSet = $param["LocalVolumeSnapshotSet"];
            }

        }
}