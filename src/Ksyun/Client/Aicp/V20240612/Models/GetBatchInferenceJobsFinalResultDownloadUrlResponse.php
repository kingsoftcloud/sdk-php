<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class GetBatchInferenceJobsFinalResultDownloadUrlResponse extends BaseModel
{
         /** **/
         public  $DownloadUrl;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
                $this->DownloadUrl = $param["DownloadUrl"];
            }

        }
}