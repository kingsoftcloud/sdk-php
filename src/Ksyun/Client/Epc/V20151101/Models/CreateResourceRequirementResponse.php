<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateResourceRequirementResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 资源需求信息**/
         public  $ResourceRequirement;

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
            if (array_key_exists("ResourceRequirement",$param) and $param["ResourceRequirement"] !== null) {
                $this->ResourceRequirement = $param["ResourceRequirement"];
            }

        }
}