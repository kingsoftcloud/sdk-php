<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DownloadClusterConfigResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /** 是否开启apiserver访问
true：已开启
false：未开启**/
         public  $Expose;

         /** 集群访问凭证
若Expose为false，该字段返回为空。**/
         public  $ClusterConfig;

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
            if (array_key_exists("Expose",$param) and $param["Expose"] !== null) {
                $this->Expose = $param["Expose"];
            }
            if (array_key_exists("ClusterConfig",$param) and $param["ClusterConfig"] !== null) {
                $this->ClusterConfig = $param["ClusterConfig"];
            }

        }
}