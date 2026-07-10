<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeLaunchTemplatesResponse extends BaseModel
{
         /**Object **/
         public  $LaunchTemplates;

         /** **/
         public  $RequestId;

         /** **/
         public  $TotalCount;

         /** **/
         public  $NextToken;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("LaunchTemplates",$param) and $param["LaunchTemplates"] !== null) {
                $this->LaunchTemplates = $param["LaunchTemplates"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }

        }
}