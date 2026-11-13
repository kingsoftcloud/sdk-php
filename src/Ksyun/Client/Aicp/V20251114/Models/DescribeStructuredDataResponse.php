<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeStructuredDataResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 结构化表名**/
         public  $TableName;

         /**Object 列定义（表头）**/
         public  $Columns;

         /** 总行数**/
         public  $Total;

         /** 分页**/
         public  $Page;

         /** 分页**/
         public  $PageSize;

         /**Object 当前页行数据**/
         public  $Rows;

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
            if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
                $this->TableName = $param["TableName"];
            }
            if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
                $this->Columns = $param["Columns"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
                $this->Rows = $param["Rows"];
            }

        }
}