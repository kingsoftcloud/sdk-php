<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreatePathTaskResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /** 路径分析任务ID**/
         public  $PathTaskId;

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
            if (array_key_exists("PathTaskId",$param) and $param["PathTaskId"] !== null) {
                $this->PathTaskId = $param["PathTaskId"];
            }

        }
}