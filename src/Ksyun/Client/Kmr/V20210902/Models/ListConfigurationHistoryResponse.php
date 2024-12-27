<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class ListConfigurationHistoryResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 集群ID**/
         public  $ClusterId;

         /** 服务名称**/
         public  $ServiceName;

         /** 总数**/
         public  $Total;

         /**Object **/
         public  $Data;

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
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
                $this->StatusCode = $param["StatusCode"];
            }

        }
}