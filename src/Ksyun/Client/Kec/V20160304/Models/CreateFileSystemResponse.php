<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateFileSystemResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 预删除的文件系统ID**/
         public  $FileSystemId;

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
            if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
                $this->FileSystemId = $param["FileSystemId"];
            }

        }
}