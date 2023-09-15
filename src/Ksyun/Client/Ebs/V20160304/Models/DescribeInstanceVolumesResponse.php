<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceVolumesResponse extends BaseModel
{
         /** 唯一请求ID，每次请求都会返回**/
         public  $RequestId;

         /**Object 该主机下挂载的硬盘信息，若无挂载硬盘则不返回**/
         public  $Attachments;

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
            if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
                $this->Attachments = $param["Attachments"];
            }

        }
}