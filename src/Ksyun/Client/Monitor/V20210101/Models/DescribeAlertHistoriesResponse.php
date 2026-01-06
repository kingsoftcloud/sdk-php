<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;

class DescribeAlertHistoriesResponse extends BaseModel
{
         /** **/
         public  $requestId;

         /** 业务状态码。

> **说明**：Success: 表示请求成功。**/
         public  $code;

         /** 错误信息。**/
         public  $message;

         /**Object 告警历史记录列表**/
         public  $alertHistoryList;

         /** **/
         public  $totalCount;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("requestId",$param) and $param["requestId"] !== null) {
                $this->requestId = $param["requestId"];
            }
            if (array_key_exists("code",$param) and $param["code"] !== null) {
                $this->code = $param["code"];
            }
            if (array_key_exists("message",$param) and $param["message"] !== null) {
                $this->message = $param["message"];
            }
            if (array_key_exists("alertHistoryList",$param) and $param["alertHistoryList"] !== null) {
                $this->alertHistoryList = $param["alertHistoryList"];
            }
            if (array_key_exists("totalCount",$param) and $param["totalCount"] !== null) {
                $this->totalCount = $param["totalCount"];
            }

        }
}