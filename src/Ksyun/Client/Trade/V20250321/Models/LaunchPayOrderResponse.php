<?php
namespace  Ksyun\Client\Trade\V20250321\Models;

use Ksyun\Common\BaseModel;

class LaunchPayOrderResponse extends BaseModel
{
         /** 订单ID**/
         public  $OrderId;

         /** 支付金额，单位：元**/
         public  $RealMoney;

         /** 唯一请求ID**/
         public  $RequestId;

         /**String 子订单ID**/
         public  $SubOrderIds;

         /** 官网原价，单位：元**/
         public  $TotalMoney;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
                $this->OrderId = $param["OrderId"];
            }
            if (array_key_exists("RealMoney",$param) and $param["RealMoney"] !== null) {
                $this->RealMoney = $param["RealMoney"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("SubOrderIds",$param) and $param["SubOrderIds"] !== null) {
                $this->SubOrderIds = $param["SubOrderIds"];
            }
            if (array_key_exists("TotalMoney",$param) and $param["TotalMoney"] !== null) {
                $this->TotalMoney = $param["TotalMoney"];
            }

        }
}