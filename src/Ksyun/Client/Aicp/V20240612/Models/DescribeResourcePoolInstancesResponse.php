<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeResourcePoolInstancesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 每页最大数目**/
         public  $PageSize;

         /** 	
页码**/
         public  $Page;

         /** 节点总数**/
         public  $TotalCount;

         /**Object 资源组节点列表**/
         public  $ResourcePoolInstanceSet;

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
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("ResourcePoolInstanceSet",$param) and $param["ResourcePoolInstanceSet"] !== null) {
                $this->ResourcePoolInstanceSet = $param["ResourcePoolInstanceSet"];
            }

        }
}