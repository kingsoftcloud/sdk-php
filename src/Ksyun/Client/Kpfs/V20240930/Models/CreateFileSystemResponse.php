<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class CreateFileSystemResponse extends BaseModel
{
         /** 文件系统的实例ID。**/
         public  $FileSystemId;

         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
                $this->FileSystemId = $param["FileSystemId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}