<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DescribeReleaseHistoryResponse extends BaseModel
{
         /** 请求 Id**/
         public  $RequestId;

         /**Object **/
         public  $ReleaseVersions;

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
            if (array_key_exists("ReleaseVersions",$param) and $param["ReleaseVersions"] !== null) {
                $this->ReleaseVersions = $param["ReleaseVersions"];
            }

        }
}