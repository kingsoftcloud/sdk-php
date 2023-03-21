<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DetachInstancesIamRoleResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 为实例解绑IAM角色成功与否**/
         public  $Results;

         /** 实例绑定IAM角色失败个数**/
         public  $FailCount;

         /** 实例绑定IAM角色总个数**/
         public  $TotalCount;

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
            if (array_key_exists("Results",$param) and $param["Results"] !== null) {
                $this->Results = $param["Results"];
            }
            if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
                $this->FailCount = $param["FailCount"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }

        }
}