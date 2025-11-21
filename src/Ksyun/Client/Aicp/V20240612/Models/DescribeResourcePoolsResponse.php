<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeResourcePoolsResponse extends BaseModel
{
         /**Object 资源组列表**/
         public  $ResourcePoolSet;

         /** 资源组总数**/
         public  $TotalCount;

         /** 每页最大实例数目**/
         public  $PageSize;

         /** 页码**/
         public  $Page;

         /** 请求ID**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ResourcePoolSet",$param) and $param["ResourcePoolSet"] !== null) {
                $this->ResourcePoolSet = $param["ResourcePoolSet"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}