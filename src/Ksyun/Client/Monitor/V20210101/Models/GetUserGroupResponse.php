<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;

class GetUserGroupResponse extends BaseModel
{
         /** **/
         public  $data;

         /** 总记录数**/
         public  $totalCount;

         /** 请求ID。**/
         public  $requestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("data",$param) and $param["data"] !== null) {
                $this->data = $param["data"];
            }
            if (array_key_exists("totalCount",$param) and $param["totalCount"] !== null) {
                $this->totalCount = $param["totalCount"];
            }
            if (array_key_exists("requestId",$param) and $param["requestId"] !== null) {
                $this->requestId = $param["requestId"];
            }

        }
}