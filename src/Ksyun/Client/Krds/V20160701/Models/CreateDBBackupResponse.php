<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class CreateDBBackupResponse extends BaseModel
{
         /** 备份信息
**/
         public  $DBBackup;

         /** 请求ID	
–**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DBBackup",$param) and $param["DBBackup"] !== null) {
                $this->DBBackup = $param["DBBackup"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}