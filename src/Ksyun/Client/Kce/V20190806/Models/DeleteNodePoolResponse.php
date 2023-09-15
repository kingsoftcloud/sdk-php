<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DeleteNodePoolResponse extends BaseModel
{
         /** 请求id**/
         public  $RequestId;

         /**Object 调用结果**/
         public  $ReturnSet;

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
            if (array_key_exists("ReturnSet",$param) and $param["ReturnSet"] !== null) {
                $this->ReturnSet = $param["ReturnSet"];
            }

        }
}