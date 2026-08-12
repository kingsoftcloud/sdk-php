<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class CreateFileDeletePolicyResponse extends BaseModel
{
         /** 文件删除策略ID。**/
         public  $FileDeletePolicyId;

         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("FileDeletePolicyId",$param) and $param["FileDeletePolicyId"] !== null) {
                $this->FileDeletePolicyId = $param["FileDeletePolicyId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}