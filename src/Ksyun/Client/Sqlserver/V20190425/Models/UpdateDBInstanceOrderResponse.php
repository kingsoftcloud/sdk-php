<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

use Ksyun\Common\BaseModel;

class UpdateDBInstanceOrderResponse extends BaseModel
{
         /** **/
         public  $status;

         /** **/
         public  $orderId;

         /** **/
         public  $totalMoney;

         /** **/
         public  $realMoney;

         /** **/
         public  $lastMoney;

         /**String **/
         public  $subOrderIds;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("status",$param) and $param["status"] !== null) {
                $this->status = $param["status"];
            }
            if (array_key_exists("orderId",$param) and $param["orderId"] !== null) {
                $this->orderId = $param["orderId"];
            }
            if (array_key_exists("totalMoney",$param) and $param["totalMoney"] !== null) {
                $this->totalMoney = $param["totalMoney"];
            }
            if (array_key_exists("realMoney",$param) and $param["realMoney"] !== null) {
                $this->realMoney = $param["realMoney"];
            }
            if (array_key_exists("lastMoney",$param) and $param["lastMoney"] !== null) {
                $this->lastMoney = $param["lastMoney"];
            }
            if (array_key_exists("subOrderIds",$param) and $param["subOrderIds"] !== null) {
                $this->subOrderIds = $param["subOrderIds"];
            }

        }
}