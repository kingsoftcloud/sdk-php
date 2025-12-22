<?php
namespace  Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;

class OperateHotAndColdSeparationResponse extends BaseModel
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