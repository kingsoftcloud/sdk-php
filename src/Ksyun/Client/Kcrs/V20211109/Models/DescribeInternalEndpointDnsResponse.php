<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeInternalEndpointDnsResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $InternalEndpointDnsSet;

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
            if (array_key_exists("InternalEndpointDnsSet",$param) and $param["InternalEndpointDnsSet"] !== null) {
                $this->InternalEndpointDnsSet = $param["InternalEndpointDnsSet"];
            }

        }
}