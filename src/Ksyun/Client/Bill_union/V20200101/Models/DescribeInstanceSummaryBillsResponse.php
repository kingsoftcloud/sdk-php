<?php
namespace  Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceSummaryBillsResponse extends BaseModel
{
         /** 当前请求的RequestId**/
         public  $RequestId;

         /** 登录邮箱**/
         public  $Email;

         /** 页码**/
         public  $PageNum;

         /** 每页数量**/
         public  $PageSize;

         /** 总记录数**/
         public  $TotalCount;

         /** 客户UID**/
         public  $CustomerId;

         /**Object 实例账单汇总详情**/
         public  $SummaryOverview;

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
            if (array_key_exists("Email",$param) and $param["Email"] !== null) {
                $this->Email = $param["Email"];
            }
            if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
                $this->PageNum = $param["PageNum"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
                $this->CustomerId = $param["CustomerId"];
            }
            if (array_key_exists("SummaryOverview",$param) and $param["SummaryOverview"] !== null) {
                $this->SummaryOverview = $param["SummaryOverview"];
            }

        }
}