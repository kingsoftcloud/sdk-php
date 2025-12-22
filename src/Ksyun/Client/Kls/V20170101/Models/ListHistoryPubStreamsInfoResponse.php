<?php
namespace  Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;

class ListHistoryPubStreamsInfoResponse extends BaseModel
{
         /** **/
         public  $ListHistoryPubStreamsInfoResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListHistoryPubStreamsInfoResponse",$param) and $param["ListHistoryPubStreamsInfoResponse"] !== null) {
                $this->ListHistoryPubStreamsInfoResponse = $param["ListHistoryPubStreamsInfoResponse"];
            }

        }
}