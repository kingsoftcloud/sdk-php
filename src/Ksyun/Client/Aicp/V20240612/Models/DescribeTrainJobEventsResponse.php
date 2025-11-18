<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeTrainJobEventsResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /**Object **/
         public  $DataSet;

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
            if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
                $this->DataSet = $param["DataSet"];
            }

        }
}