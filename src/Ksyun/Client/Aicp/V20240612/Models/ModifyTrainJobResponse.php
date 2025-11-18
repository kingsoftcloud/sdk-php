<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class ModifyTrainJobResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $TrainJobId;

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
            if (array_key_exists("TrainJobId",$param) and $param["TrainJobId"] !== null) {
                $this->TrainJobId = $param["TrainJobId"];
            }

        }
}