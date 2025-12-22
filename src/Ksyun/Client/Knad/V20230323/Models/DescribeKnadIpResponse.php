<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class DescribeKnadIpResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $KnadIpSet;

         /** **/
         public  $KnadIpCount;

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
            if (array_key_exists("KnadIpSet",$param) and $param["KnadIpSet"] !== null) {
                $this->KnadIpSet = $param["KnadIpSet"];
            }
            if (array_key_exists("KnadIpCount",$param) and $param["KnadIpCount"] !== null) {
                $this->KnadIpCount = $param["KnadIpCount"];
            }

        }
}