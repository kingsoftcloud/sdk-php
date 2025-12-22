<?php
namespace  Ksyun\Client\Trade\V20250321\Models;

use Ksyun\Common\BaseModel;

class QueryOrderInfoResponse extends BaseModel
{
         /** 计费方式名称**/
         public  $billName;

         /** 创建时间，单位ms**/
         public  $createTime;

         /** 代金券优惠抵扣金额**/
         public  $discountAmount;

         /** 0-订单未支付;
1-订单已支付;
2-订单已取消;
4-退订订单已退款;
5-退订订单退款中;
20-因个别实例开通失败，部分退款，存在开通成功的实例;
21-全部实例开通失败，全部退款;**/
         public  $hasRefund;

         /** 订单ID**/
         public  $orderId;

         /**Object 订单详情列表**/
         public  $orderList;

         /** 订单名称**/
         public  $orderName;

         /** 订单类型：
1-试用订单;
2-常规订单;**/
         public  $orderType;

         /** 订单用途：
0-未知;
1-购买;
2-续费;
3-更配;
4-试用;
5-转正;
7-退款;
8-延期;
9-修改计费类型;
10-更配及新购;**/
         public  $orderUse;

         /** 支付时间，单位ms**/
         public  $payTime;

         /** 订单总待支付金额，单位：元**/
         public  $payableMoney;

         /** 打折后支付金额，单位：元**/
         public  $realMoney;

         /** 0-订单未支付;
1-订单已支付;
2-订单已取消;
4-退订订单已退款;
5-退订订单退款中;
20-因个别实例开通失败，部分退款，存在开通成功的实例;
21-全部实例开通失败，全部退款;**/
         public  $status;

         /** 订单总金额，官网原价**/
         public  $totalMoney;

         /** 更新时间，单位ms**/
         public  $updateTime;

         /** userId**/
         public  $userId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("billName",$param) and $param["billName"] !== null) {
                $this->billName = $param["billName"];
            }
            if (array_key_exists("createTime",$param) and $param["createTime"] !== null) {
                $this->createTime = $param["createTime"];
            }
            if (array_key_exists("discountAmount",$param) and $param["discountAmount"] !== null) {
                $this->discountAmount = $param["discountAmount"];
            }
            if (array_key_exists("hasRefund",$param) and $param["hasRefund"] !== null) {
                $this->hasRefund = $param["hasRefund"];
            }
            if (array_key_exists("orderId",$param) and $param["orderId"] !== null) {
                $this->orderId = $param["orderId"];
            }
            if (array_key_exists("orderList",$param) and $param["orderList"] !== null) {
                $this->orderList = $param["orderList"];
            }
            if (array_key_exists("orderName",$param) and $param["orderName"] !== null) {
                $this->orderName = $param["orderName"];
            }
            if (array_key_exists("orderType",$param) and $param["orderType"] !== null) {
                $this->orderType = $param["orderType"];
            }
            if (array_key_exists("orderUse",$param) and $param["orderUse"] !== null) {
                $this->orderUse = $param["orderUse"];
            }
            if (array_key_exists("payTime",$param) and $param["payTime"] !== null) {
                $this->payTime = $param["payTime"];
            }
            if (array_key_exists("payableMoney",$param) and $param["payableMoney"] !== null) {
                $this->payableMoney = $param["payableMoney"];
            }
            if (array_key_exists("realMoney",$param) and $param["realMoney"] !== null) {
                $this->realMoney = $param["realMoney"];
            }
            if (array_key_exists("status",$param) and $param["status"] !== null) {
                $this->status = $param["status"];
            }
            if (array_key_exists("totalMoney",$param) and $param["totalMoney"] !== null) {
                $this->totalMoney = $param["totalMoney"];
            }
            if (array_key_exists("updateTime",$param) and $param["updateTime"] !== null) {
                $this->updateTime = $param["updateTime"];
            }
            if (array_key_exists("userId",$param) and $param["userId"] !== null) {
                $this->userId = $param["userId"];
            }

        }
}