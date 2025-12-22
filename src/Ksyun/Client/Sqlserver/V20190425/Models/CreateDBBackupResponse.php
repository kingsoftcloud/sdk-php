<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

use Ksyun\Common\BaseModel;

class CreateDBBackupResponse extends BaseModel
{
         /** 单前手动备份详细信息**/
         public  $DBBackup;

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
            if (array_key_exists("DBBackup",$param) and $param["DBBackup"] !== null) {
                $this->DBBackup = $param["DBBackup"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}