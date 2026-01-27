<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;

class DescribeModelsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 总数量**/
         public  $TotalCount;

         /** 页码**/
         public  $Page;

         /** 每页数量**/
         public  $PageSize;

         /**Object 模型列表**/
         public  $ModelSet;

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
            if (array_key_exists("ModelSet",$param) and $param["ModelSet"] !== null) {
                $this->ModelSet = $param["ModelSet"];
            }

        }
}