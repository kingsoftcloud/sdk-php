<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeInternalEndpointResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $TotalCount;

         /**Object **/
         public  $AccessVpcSet;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("AccessVpcSet",$param) and $param["AccessVpcSet"] !== null) {
                $this->AccessVpcSet = $param["AccessVpcSet"];
            }

        }
}