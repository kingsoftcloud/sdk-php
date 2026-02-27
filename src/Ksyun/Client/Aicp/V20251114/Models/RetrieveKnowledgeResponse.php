<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class RetrieveKnowledgeResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object 检索语句**/
         public  $Query;

         /**Object 召回结果**/
         public  $Records;

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
            if (array_key_exists("Query",$param) and $param["Query"] !== null) {
                $this->Query = $param["Query"];
            }
            if (array_key_exists("Records",$param) and $param["Records"] !== null) {
                $this->Records = $param["Records"];
            }

        }
}