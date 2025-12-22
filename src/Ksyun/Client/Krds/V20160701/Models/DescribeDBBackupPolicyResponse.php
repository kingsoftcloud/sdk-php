<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class DescribeDBBackupPolicyResponse extends BaseModel
{
         /** **/
         public  $BackupConfig;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("BackupConfig",$param) and $param["BackupConfig"] !== null) {
                $this->BackupConfig = $param["BackupConfig"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}