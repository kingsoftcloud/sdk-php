<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class GetApiOverviewResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /**Object API概览列表**/
         public  $ApiOverviewList;

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
            if (array_key_exists("ApiOverviewList",$param) and $param["ApiOverviewList"] !== null) {
                $this->ApiOverviewList = $param["ApiOverviewList"];
            }

        }
}