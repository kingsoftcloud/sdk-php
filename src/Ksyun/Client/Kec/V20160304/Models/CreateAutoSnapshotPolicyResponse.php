<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateAutoSnapshotPolicyResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 自动快照策略ID**/
         public  $AutoSnapshotPolicyId;

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
            if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
                $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
            }

        }
}