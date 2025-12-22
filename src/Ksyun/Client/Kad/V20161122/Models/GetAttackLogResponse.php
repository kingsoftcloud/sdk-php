<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;

class GetAttackLogResponse extends BaseModel
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