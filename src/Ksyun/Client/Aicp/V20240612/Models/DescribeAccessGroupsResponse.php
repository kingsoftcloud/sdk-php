<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeAccessGroupsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 权限组总数**/
         public  $TotalCount;

         /** 当前页码**/
         public  $Page;

         /** 每页数量**/
         public  $PageSize;

         /**Object 权限组列表**/
         public  $AccessGroupSet;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("AccessGroupSet",$param) and $param["AccessGroupSet"] !== null) {
                $this->AccessGroupSet = $param["AccessGroupSet"];
            }

        }
}