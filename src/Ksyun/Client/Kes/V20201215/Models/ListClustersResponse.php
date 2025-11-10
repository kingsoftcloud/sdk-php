<?php
namespace  Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;

class ListClustersResponse extends BaseModel
{
         /**Object 该账号下的集群列表**/
         public  $Clusters;

         /** 该账号下KES集群总数**/
         public  $Total;

         /** 请求ID**/
         public  $RequestId;

         /** 状态码**/
         public  $StatusCode;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Clusters",$param) and $param["Clusters"] !== null) {
                $this->Clusters = $param["Clusters"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
                $this->StatusCode = $param["StatusCode"];
            }

        }
}