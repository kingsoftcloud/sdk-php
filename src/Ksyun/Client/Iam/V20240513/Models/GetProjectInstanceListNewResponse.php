<?php
namespace  Ksyun\Client\Iam\V20240513\Models;

use Ksyun\Common\BaseModel;

class GetProjectInstanceListNewResponse extends BaseModel
{
         /** **/
         public  $ListInstanceResult;

         /** 示例值：32533061e18a48169fce3b61da7ab6b6**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListInstanceResult",$param) and $param["ListInstanceResult"] !== null) {
                $this->ListInstanceResult = $param["ListInstanceResult"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}