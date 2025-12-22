<?php
namespace  Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;

class DescribeAssociateClusterListResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 分页标识**/
         public  $Marker;

         /** 关联的集群数量**/
         public  $TotalCount;

         /**Object **/
         public  $ClusterSet;

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
            if (array_key_exists("ClusterSet",$param) and $param["ClusterSet"] !== null) {
                $this->ClusterSet = $param["ClusterSet"];
            }

        }
}