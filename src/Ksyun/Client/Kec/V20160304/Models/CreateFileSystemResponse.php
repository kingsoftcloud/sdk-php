<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateFileSystemResponse extends BaseModel
{
         /** **/
         public  $CreateFileSystemResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("CreateFileSystemResponse",$param) and $param["CreateFileSystemResponse"] !== null) {
                $this->CreateFileSystemResponse = $param["CreateFileSystemResponse"];
            }

        }
}