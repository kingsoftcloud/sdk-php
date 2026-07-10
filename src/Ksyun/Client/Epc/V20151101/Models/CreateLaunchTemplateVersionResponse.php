<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class CreateLaunchTemplateVersionResponse extends BaseModel
{
         /** **/
         public  $LaunchTemplateId;

         /** **/
         public  $LaunchTemplateVersionNumber;

         /** **/
         public  $RequestId;

         /** **/
         public  $Return;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
                $this->LaunchTemplateId = $param["LaunchTemplateId"];
            }
            if (array_key_exists("LaunchTemplateVersionNumber",$param) and $param["LaunchTemplateVersionNumber"] !== null) {
                $this->LaunchTemplateVersionNumber = $param["LaunchTemplateVersionNumber"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}