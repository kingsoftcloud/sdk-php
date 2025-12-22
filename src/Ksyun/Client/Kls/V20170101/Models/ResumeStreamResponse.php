<?php
namespace  Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;

class ResumeStreamResponse extends BaseModel
{
         /** **/
         public  $ResumeStreamResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ResumeStreamResponse",$param) and $param["ResumeStreamResponse"] !== null) {
                $this->ResumeStreamResponse = $param["ResumeStreamResponse"];
            }

        }
}