<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstancesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 分页标识，如果调用未返回全部实例，标记下次调用的返回值的起点，如果已返回全部实例，则其值为0**/
         public  $Marker;

         /** 实例总数**/
         public  $InstanceCount;

         /** 实例集合**/
         public  $InstancesSet;

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
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
                $this->InstanceCount = $param["InstanceCount"];
            }
            if (array_key_exists("InstancesSet",$param) and $param["InstancesSet"] !== null) {
                $this->InstancesSet = $param["InstancesSet"];
            }

        }
}