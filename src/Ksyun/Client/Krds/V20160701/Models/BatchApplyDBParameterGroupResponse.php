<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class BatchApplyDBParameterGroupResponse extends BaseModel
{
         /** **/
         public  $succeededCount;

         /** **/
         public  $failedCount;

         /**String **/
         public  $succeeded;

         /**Object **/
         public  $failed;

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
            if (array_key_exists("succeededCount",$param) and $param["succeededCount"] !== null) {
                $this->succeededCount = $param["succeededCount"];
            }
            if (array_key_exists("failedCount",$param) and $param["failedCount"] !== null) {
                $this->failedCount = $param["failedCount"];
            }
            if (array_key_exists("succeeded",$param) and $param["succeeded"] !== null) {
                $this->succeeded = $param["succeeded"];
            }
            if (array_key_exists("failed",$param) and $param["failed"] !== null) {
                $this->failed = $param["failed"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}