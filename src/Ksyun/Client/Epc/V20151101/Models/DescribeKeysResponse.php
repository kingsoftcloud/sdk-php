<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeKeysResponse extends BaseModel
{
         /** 
- 请求ID
- 类型：String

**/
         public  $RequestId;

         /** 
- 密钥列表
- 类型:[Key](https://docs.ksyun.com/documents/653)   List

**/
         public  $KeySet;

         /** 
- 用户密钥对总数
- 类型：Int


**/
         public  $TotalCount;

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
            if (array_key_exists("KeySet",$param) and $param["KeySet"] !== null) {
                $this->KeySet = $param["KeySet"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }

        }
}