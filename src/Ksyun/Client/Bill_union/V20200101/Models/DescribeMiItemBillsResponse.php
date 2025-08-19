<?php
namespace  Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;

class DescribeMiItemBillsResponse extends BaseModel
{
         /** 请求RequestId**/
         public  $RequestId;

         /** ks3地址**/
         public  $url;

         /** 错误节点。响应错误时，该节点才有值。**/
         public  $Error;

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
            if (array_key_exists("url",$param) and $param["url"] !== null) {
                $this->url = $param["url"];
            }
            if (array_key_exists("Error",$param) and $param["Error"] !== null) {
                $this->Error = $param["Error"];
            }

        }
}