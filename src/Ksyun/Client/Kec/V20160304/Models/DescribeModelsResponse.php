<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeModelsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 实例启动模板集合**/
         public  $ModelParent;

         /** 模板总数**/
         public  $InstanceCount;

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
            if (array_key_exists("ModelParent",$param) and $param["ModelParent"] !== null) {
                $this->ModelParent = $param["ModelParent"];
            }
            if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
                $this->InstanceCount = $param["InstanceCount"];
            }

        }
}