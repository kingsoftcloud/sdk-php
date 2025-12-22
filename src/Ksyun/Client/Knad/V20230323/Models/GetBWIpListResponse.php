<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class GetBWIpListResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $IpList;

         /** **/
         public  $total;

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
            if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
                $this->IpList = $param["IpList"];
            }
            if (array_key_exists("total",$param) and $param["total"] !== null) {
                $this->total = $param["total"];
            }

        }
}