<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class RenameMongoDBInstanceResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $InstanceId;

         /** **/
         public  $name;

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
            if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
                $this->InstanceId = $param["InstanceId"];
            }
            if (array_key_exists("name",$param) and $param["name"] !== null) {
                $this->name = $param["name"];
            }

        }
}