<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeDocumentsResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object 文档列表**/
         public  $Data;

         /** 是否还有下一页**/
         public  $HasMore;

         /** 总条数**/
         public  $Total;

         /** 当前页码**/
         public  $Page;

         /** 每页条数**/
         public  $Limit;

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
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("HasMore",$param) and $param["HasMore"] !== null) {
                $this->HasMore = $param["HasMore"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
                $this->Limit = $param["Limit"];
            }

        }
}