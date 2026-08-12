<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeDataFlowStrategySubscribeResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object 数据流动订阅记录列表**/
         public  $Data;

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
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}