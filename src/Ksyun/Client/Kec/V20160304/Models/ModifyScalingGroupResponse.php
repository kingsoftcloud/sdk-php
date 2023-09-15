<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyScalingGroupResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 添加云服务器是否成功**/
         public  $Return;

         /** 返回集合**/
         public  $ReturnSet;

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
            if (array_key_exists("ReturnSet",$param) and $param["ReturnSet"] !== null) {
                $this->ReturnSet = $param["ReturnSet"];
            }

        }
}