<?php
namespace  Ksyun\Client\Bill_union\V20200101\Models;

use Ksyun\Common\BaseModel;

class DescribeBillSummaryByProjectResponse extends BaseModel
{
         /** 当前请求的RequestId**/
         public  $RequestId;

         /** 币种**/
         public  $Currency;

         /** 总金额，即折后价**/
         public  $RealTotalCost;

         /**Object 各项目制分布详情**/
         public  $SummaryOverview;

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
            if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
                $this->Currency = $param["Currency"];
            }
            if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
                $this->RealTotalCost = $param["RealTotalCost"];
            }
            if (array_key_exists("SummaryOverview",$param) and $param["SummaryOverview"] !== null) {
                $this->SummaryOverview = $param["SummaryOverview"];
            }

        }
}