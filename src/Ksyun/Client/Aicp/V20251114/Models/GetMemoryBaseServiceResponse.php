<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class GetMemoryBaseServiceResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 仅 CREATE_SUCCESS 表示已经开通，其他情况需要开通。**/
         public  $Status;

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
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }

        }
}