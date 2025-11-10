<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class ListConfigurationsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 集群ID**/
         public  $ClusterId;

         /** 服务名称**/
         public  $ServiceName;

         /**Object 配置组**/
         public  $ConfigGroups;

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
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
                $this->ClusterId = $param["ClusterId"];
            }
            if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
                $this->ServiceName = $param["ServiceName"];
            }
            if (array_key_exists("ConfigGroups",$param) and $param["ConfigGroups"] !== null) {
                $this->ConfigGroups = $param["ConfigGroups"];
            }
            if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
                $this->StatusCode = $param["StatusCode"];
            }

        }
}