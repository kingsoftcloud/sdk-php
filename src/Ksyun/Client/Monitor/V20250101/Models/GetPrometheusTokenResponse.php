<?php
namespace  Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;

class GetPrometheusTokenResponse extends BaseModel
{
         /** 请求ID。**/
         public  $RequestID;

         /** 访问Token。

> 该Token可用于Prometheus访问，具体使用，可参考：[监控数据查询](https://docs.ksyun.com/documents/44463?type=3) 相关文档。**/
         public  $Token;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestID",$param) and $param["RequestID"] !== null) {
                $this->RequestID = $param["RequestID"];
            }
            if (array_key_exists("Token",$param) and $param["Token"] !== null) {
                $this->Token = $param["Token"];
            }

        }
}