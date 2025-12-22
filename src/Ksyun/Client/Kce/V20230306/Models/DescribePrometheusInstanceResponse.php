<?php
namespace  Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;

class DescribePrometheusInstanceResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 分页标识，如果调用未返回全部实例，标记下次调用的返回值的起点，如果已返回全部实例，则其值为0**/
         public  $Marker;

         /** 实例数量**/
         public  $TotalCount;

         /**Object 实例信息**/
         public  $InstanceSet;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
                $this->InstanceSet = $param["InstanceSet"];
            }

        }
}