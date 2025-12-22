<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyEndPointResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 出站节点信息**/
         public  $EndPoint;

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
            if (array_key_exists("EndPoint",$param) and $param["EndPoint"] !== null) {
                $this->EndPoint = $param["EndPoint"];
            }

        }
}