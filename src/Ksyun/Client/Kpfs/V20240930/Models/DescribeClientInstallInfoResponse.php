<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeClientInstallInfoResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** **/
         public  $ClusterDataIP;

         /**Object **/
         public  $Data;

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
            if (array_key_exists("ClusterDataIP",$param) and $param["ClusterDataIP"] !== null) {
                $this->ClusterDataIP = $param["ClusterDataIP"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}