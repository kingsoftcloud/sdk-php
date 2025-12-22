<?php
namespace  Ksyun\Client\Influxdb\V20191010\Models;

use Ksyun\Common\BaseModel;

class DeleteRetentionPolicyResponse extends BaseModel
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