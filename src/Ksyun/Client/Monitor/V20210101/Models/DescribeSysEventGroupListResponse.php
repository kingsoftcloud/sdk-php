<?php
namespace  Ksyun\Client\Monitor\V20210101\Models;

use Ksyun\Common\BaseModel;

class DescribeSysEventGroupListResponse extends BaseModel
{
         /** **/
         public  $requestId;

         /** **/
         public  $code;

         /** **/
         public  $message;

         /**Object **/
         public  $sysEventGroupList;

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
            if (array_key_exists("sysEventGroupList",$param) and $param["sysEventGroupList"] !== null) {
                $this->sysEventGroupList = $param["sysEventGroupList"];
            }
            if (array_key_exists("totalCount",$param) and $param["totalCount"] !== null) {
                $this->totalCount = $param["totalCount"];
            }

        }
}