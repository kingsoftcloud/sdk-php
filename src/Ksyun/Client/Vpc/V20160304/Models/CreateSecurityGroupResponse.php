<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateSecurityGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 安全组信息**/
         public  $SecurityGroup;

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
            if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
                $this->SecurityGroup = $param["SecurityGroup"];
            }

        }
}