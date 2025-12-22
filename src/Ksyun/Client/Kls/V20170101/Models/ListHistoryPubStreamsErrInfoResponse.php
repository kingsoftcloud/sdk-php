<?php
namespace  Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;

class ListHistoryPubStreamsErrInfoResponse extends BaseModel
{
         /** **/
         public  $ListHistoryPubStreamsErrInfoResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ListHistoryPubStreamsErrInfoResponse",$param) and $param["ListHistoryPubStreamsErrInfoResponse"] !== null) {
                $this->ListHistoryPubStreamsErrInfoResponse = $param["ListHistoryPubStreamsErrInfoResponse"];
            }

        }
}