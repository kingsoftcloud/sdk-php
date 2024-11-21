<?php
namespace  Ksyun\Client\Tagv2\V20200901\Models;

use Ksyun\Common\BaseModel;

class ListTagsByResourceIdsResponse extends BaseModel
{
         /**Object **/
         public  $Tags;

         /** 请求id**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
                $this->Tags = $param["Tags"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}