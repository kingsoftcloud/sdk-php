<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class ListServiceStatusResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /**Object 服务列表**/
         public  $Services;

         /** 是否开启EIP**/
         public  $EnableEip;

         /** 是否确认配置**/
         public  $IsConfComplete;

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
            if (array_key_exists("Services",$param) and $param["Services"] !== null) {
                $this->Services = $param["Services"];
            }
            if (array_key_exists("EnableEip",$param) and $param["EnableEip"] !== null) {
                $this->EnableEip = $param["EnableEip"];
            }
            if (array_key_exists("IsConfComplete",$param) and $param["IsConfComplete"] !== null) {
                $this->IsConfComplete = $param["IsConfComplete"];
            }
            if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
                $this->StatusCode = $param["StatusCode"];
            }

        }
}