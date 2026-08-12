<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class SetPerformanceOnePosixAclResponse extends BaseModel
{
         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         /** 新建成功后生成的POSIX访问授权规则唯一ID**/
         public  $PosixAclId;

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
            if (array_key_exists("PosixAclId",$param) and $param["PosixAclId"] !== null) {
                $this->PosixAclId = $param["PosixAclId"];
            }

        }
}