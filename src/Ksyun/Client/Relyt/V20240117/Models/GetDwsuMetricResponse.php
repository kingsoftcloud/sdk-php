<?php
namespace  Ksyun\Client\Relyt\V20240117\Models;

use Ksyun\Common\BaseModel;

class GetDwsuMetricResponse extends BaseModel
{
         /** 响应状态码**/
         public  $Code;

         /** 响应消息**/
         public  $Message;

         /**Object 监控指标数组**/
         public  $Data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Code",$param) and $param["Code"] !== null) {
                $this->Code = $param["Code"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}