<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeEpcStocksResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 库存的信息**/
         public  $EpcStockSet;

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
            if (array_key_exists("EpcStockSet",$param) and $param["EpcStockSet"] !== null) {
                $this->EpcStockSet = $param["EpcStockSet"];
            }

        }
}