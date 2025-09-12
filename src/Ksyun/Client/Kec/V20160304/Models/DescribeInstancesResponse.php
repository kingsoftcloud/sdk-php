<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstancesResponse extends BaseModel
{
         /** 分页标识，单次调用未返回全部实例时，标记下次调用的返回值的起点，默认值是0**/
         public  $Marker;

         /** 实例数量**/
         public  $InstanceCount;

         /** 请求ID**/
         public  $RequestId;

         /**Object **/
         public  $InstancesSet;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
                $this->InstanceCount = $param["InstanceCount"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("InstancesSet",$param) and $param["InstancesSet"] !== null) {
                $this->InstancesSet = $param["InstancesSet"];
            }

        }
}