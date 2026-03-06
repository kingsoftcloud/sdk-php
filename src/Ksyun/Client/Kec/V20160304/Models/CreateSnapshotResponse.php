<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateSnapshotResponse extends BaseModel
{
         /** 生成的快照ID**/
         public  $SnapshotId;

         /** 指定文件系统实例ID**/
         public  $FileSystemId;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
                $this->SnapshotId = $param["SnapshotId"];
            }
            if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
                $this->FileSystemId = $param["FileSystemId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}