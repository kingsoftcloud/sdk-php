<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class BatchDisplayStatusResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 整体状态**/
         public  $Status;

         /**Object 各文档状态**/
         public  $Data;

         /**Object 异常文档**/
         public  $Errors;

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
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("Errors",$param) and $param["Errors"] !== null) {
                $this->Errors = $param["Errors"];
            }

        }
}