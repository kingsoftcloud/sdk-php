<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DescribeReleaseDetailResponse extends BaseModel
{
         /** 请求 Id**/
         public  $RequestId;

         /**Object **/
         public  $ReleaseDetail;

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
            if (array_key_exists("ReleaseDetail",$param) and $param["ReleaseDetail"] !== null) {
                $this->ReleaseDetail = $param["ReleaseDetail"];
            }

        }
}