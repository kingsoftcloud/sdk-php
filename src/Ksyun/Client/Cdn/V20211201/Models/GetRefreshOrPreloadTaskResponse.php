<?php
namespace  Ksyun\Client\Cdn\V20211201\Models;

use Ksyun\Common\BaseModel;

class GetRefreshOrPreloadTaskResponse extends BaseModel
{
         /** **/
         public  $GetRefreshOrPreloadTaskResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("GetRefreshOrPreloadTaskResponse",$param) and $param["GetRefreshOrPreloadTaskResponse"] !== null) {
                $this->GetRefreshOrPreloadTaskResponse = $param["GetRefreshOrPreloadTaskResponse"];
            }

        }
}