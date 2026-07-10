<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeLaunchTemplateVersionsResponse extends BaseModel
{
         /**Object **/
         public  $LaunchTemplateVersions;

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
            if (array_key_exists("LaunchTemplateVersions",$param) and $param["LaunchTemplateVersions"] !== null) {
                $this->LaunchTemplateVersions = $param["LaunchTemplateVersions"];
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