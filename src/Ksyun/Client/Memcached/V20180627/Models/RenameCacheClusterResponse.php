<?php
namespace  Ksyun\Client\Memcached\V20180627\Models;

use Ksyun\Common\BaseModel;

class RenameCacheClusterResponse extends BaseModel
{
         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }

        }
}