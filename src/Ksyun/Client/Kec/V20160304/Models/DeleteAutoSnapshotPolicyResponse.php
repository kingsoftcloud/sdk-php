<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteAutoSnapshotPolicyResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /**String 自动快照策略ID**/
         public  $AutoSnapshotPolicySet;

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
            if (array_key_exists("AutoSnapshotPolicySet",$param) and $param["AutoSnapshotPolicySet"] !== null) {
                $this->AutoSnapshotPolicySet = $param["AutoSnapshotPolicySet"];
            }

        }
}