<?php
namespace  Ksyun\Client\Monitor\V20100525\Models;

use Ksyun\Common\BaseModel;

class ListMetricsResponse extends BaseModel
{
         /** **/
         public  $listMetricsResult;

         /** **/
         public  $responseMetadata;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("listMetricsResult",$param) and $param["listMetricsResult"] !== null) {
                $this->listMetricsResult = $param["listMetricsResult"];
            }
            if (array_key_exists("responseMetadata",$param) and $param["responseMetadata"] !== null) {
                $this->responseMetadata = $param["responseMetadata"];
            }

        }
}