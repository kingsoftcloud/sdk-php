<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;

class ListTagValuesResponse extends BaseModel
{
         /**Object TagValues**/
         public  $TagValues;

         /** 页码**/
         public  $Page;

         /** 条数**/
         public  $PageSize;

         /** 总数**/
         public  $Total;

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
            if (array_key_exists("TagValues",$param) and $param["TagValues"] !== null) {
                $this->TagValues = $param["TagValues"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}