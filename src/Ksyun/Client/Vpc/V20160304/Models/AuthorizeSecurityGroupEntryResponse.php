<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class AuthorizeSecurityGroupEntryResponse extends BaseModel
{
         /**String 安全组规则ID列表**/
         public  $SecurityGroupEntryIdSet;

         /** 请求ID**/
         public  $RequestId;

         /** 操作是否成功**/
         public  $Return;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SecurityGroupEntryIdSet",$param) and $param["SecurityGroupEntryIdSet"] !== null) {
                $this->SecurityGroupEntryIdSet = $param["SecurityGroupEntryIdSet"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}