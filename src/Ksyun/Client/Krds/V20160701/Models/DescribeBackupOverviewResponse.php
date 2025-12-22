<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class DescribeBackupOverviewResponse extends BaseModel
{
         /** **/
         public  $BackupOverview;

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
            if (array_key_exists("BackupOverview",$param) and $param["BackupOverview"] !== null) {
                $this->BackupOverview = $param["BackupOverview"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}