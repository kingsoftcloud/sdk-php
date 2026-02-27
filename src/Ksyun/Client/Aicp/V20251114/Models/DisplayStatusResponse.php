<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DisplayStatusResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 文档 ID**/
         public  $Id;

         /** 展示状态：queuing / indexing / available / error**/
         public  $DisplayStatus;

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
            if (array_key_exists("Id",$param) and $param["Id"] !== null) {
                $this->Id = $param["Id"];
            }
            if (array_key_exists("DisplayStatus",$param) and $param["DisplayStatus"] !== null) {
                $this->DisplayStatus = $param["DisplayStatus"];
            }

        }
}