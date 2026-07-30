<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class GetUsageDownloadTaskResponse extends BaseModel
{
         /** **/
         public  $Result;

         /** **/
         public  $File;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Result",$param) and $param["Result"] !== null) {
                $this->Result = $param["Result"];
            }
            if (array_key_exists("File",$param) and $param["File"] !== null) {
                $this->File = $param["File"];
            }

        }
}