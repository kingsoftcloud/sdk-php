<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteDedicatedClusterResponse extends BaseModel
{
         /**Object **/
         public  $DedicatedClustersSet;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DedicatedClustersSet",$param) and $param["DedicatedClustersSet"] !== null) {
                $this->DedicatedClustersSet = $param["DedicatedClustersSet"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}