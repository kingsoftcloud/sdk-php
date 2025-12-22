<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateSnapshotResponse extends BaseModel
{
         /** 唯一请求ID，每次请求都会返回**/
         public  $RequestId;

         /** 快照ID**/
         public  $SnapshotId;

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
            if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
                $this->SnapshotId = $param["SnapshotId"];
            }

        }
}