<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class CreateDataFlowStrategyResponse extends BaseModel
{
         /** 数据流动策略ID。**/
         public  $StrategyId;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
                $this->StrategyId = $param["StrategyId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}