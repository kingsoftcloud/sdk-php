<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;

class BindFdZoneVpcResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 请求发送是否成功，具体绑定状态取决于BindVpcSet中的Status**/
         public  $Return;

         /**Object 所绑定的VPC信息**/
         public  $BindVpcSet;

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
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }
            if (array_key_exists("BindVpcSet",$param) and $param["BindVpcSet"] !== null) {
                $this->BindVpcSet = $param["BindVpcSet"];
            }

        }
}