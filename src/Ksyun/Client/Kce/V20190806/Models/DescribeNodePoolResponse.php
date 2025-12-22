<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DescribeNodePoolResponse extends BaseModel
{
         /** RequestId**/
         public  $RequestId;

         /** 单次调用返回的最大数**/
         public  $MaxResults;

         /** 分页标识，如果调用未返回全部实例，标记下次调用的返回值的起点，如果已返回全部实例，则其值为0**/
         public  $Marker;

         /** 节点池数量**/
         public  $TotalCount;

         /**Object 节点池详细信息**/
         public  $NodePoolSet;

         /** 集群扩容算法**/
         public  $ScaleUpPolicy;

         /** 集群缩容算法**/
         public  $ScaleDownPolicy;

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
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("NodePoolSet",$param) and $param["NodePoolSet"] !== null) {
                $this->NodePoolSet = $param["NodePoolSet"];
            }
            if (array_key_exists("ScaleUpPolicy",$param) and $param["ScaleUpPolicy"] !== null) {
                $this->ScaleUpPolicy = $param["ScaleUpPolicy"];
            }
            if (array_key_exists("ScaleDownPolicy",$param) and $param["ScaleDownPolicy"] !== null) {
                $this->ScaleDownPolicy = $param["ScaleDownPolicy"];
            }

        }
}