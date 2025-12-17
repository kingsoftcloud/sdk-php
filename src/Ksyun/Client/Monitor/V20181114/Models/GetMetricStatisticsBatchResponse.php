<?php
namespace  Ksyun\Client\Monitor\V20181114\Models;

use Ksyun\Common\BaseModel;

class GetMetricStatisticsBatchResponse extends BaseModel
{
         /** **/
         public  $getMetricStatisticsBatchResults;

         /** **/
         public  $responseMetadata;

         /**String 错误信息列表。**/
         public  $errorMessage;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("getMetricStatisticsBatchResults",$param) and $param["getMetricStatisticsBatchResults"] !== null) {
                $this->getMetricStatisticsBatchResults = $param["getMetricStatisticsBatchResults"];
            }
            if (array_key_exists("responseMetadata",$param) and $param["responseMetadata"] !== null) {
                $this->responseMetadata = $param["responseMetadata"];
            }
            if (array_key_exists("errorMessage",$param) and $param["errorMessage"] !== null) {
                $this->errorMessage = $param["errorMessage"];
            }

        }
}