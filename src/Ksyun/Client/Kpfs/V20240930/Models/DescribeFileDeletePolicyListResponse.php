<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeFileDeletePolicyListResponse extends BaseModel
{
         /** 记录总数**/
         public  $TotalCount;

         /** 当前页记录数**/
         public  $PageSize;

         /** 当前页码**/
         public  $PageNumber;

         /**Object **/
         public  $FileDeletePolicyList;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
                $this->PageNumber = $param["PageNumber"];
            }
            if (array_key_exists("FileDeletePolicyList",$param) and $param["FileDeletePolicyList"] !== null) {
                $this->FileDeletePolicyList = $param["FileDeletePolicyList"];
            }

        }
}