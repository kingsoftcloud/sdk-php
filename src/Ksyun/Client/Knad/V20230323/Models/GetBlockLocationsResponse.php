<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;

class GetBlockLocationsResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 是否封禁。
1封禁 0 不封禁**/
         public  $LocationBlock;

         /**Object **/
         public  $BlockLocationSet;

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
            if (array_key_exists("LocationBlock",$param) and $param["LocationBlock"] !== null) {
                $this->LocationBlock = $param["LocationBlock"];
            }
            if (array_key_exists("BlockLocationSet",$param) and $param["BlockLocationSet"] !== null) {
                $this->BlockLocationSet = $param["BlockLocationSet"];
            }

        }
}