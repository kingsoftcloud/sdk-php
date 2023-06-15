<?php
namespace  Ksyun\Client\Mongodb\V20170101\Models;

use Ksyun\Common\BaseModel;

class DescribeMongoDBSnapshotResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $MongoDBSnapshotResult;

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
            if (array_key_exists("MongoDBSnapshotResult",$param) and $param["MongoDBSnapshotResult"] !== null) {
                $this->MongoDBSnapshotResult = $param["MongoDBSnapshotResult"];
            }

        }
}