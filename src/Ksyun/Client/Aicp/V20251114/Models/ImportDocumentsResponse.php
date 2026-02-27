<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class ImportDocumentsResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object 文档信息List**/
         public  $Documents;

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
            if (array_key_exists("Documents",$param) and $param["Documents"] !== null) {
                $this->Documents = $param["Documents"];
            }

        }
}