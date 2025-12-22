<?php
namespace  Ksyun\Client\Bws\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeBandWidthSharesResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 获取另一页返回结果的 token.**/
         public  $NextToken;

         /**Object 共享带宽的信息**/
         public  $BandWidthShareSet;

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
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }
            if (array_key_exists("BandWidthShareSet",$param) and $param["BandWidthShareSet"] !== null) {
                $this->BandWidthShareSet = $param["BandWidthShareSet"];
            }

        }
}