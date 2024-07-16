<?php
namespace  Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;

class DescribeAgentStatusResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** agent状态-有效值：
Pending-关联中
Healthy-正常
Unhealthy-异常
Failed-关联失败
Terminating-解除关联中
Deleted-已解除关联
Unknown-未知**/
         public  $AgentsStatus;

         /** **/
         public  $Message;

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
            if (array_key_exists("AgentsStatus",$param) and $param["AgentsStatus"] !== null) {
                $this->AgentsStatus = $param["AgentsStatus"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }

        }
}