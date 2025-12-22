<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

use Ksyun\Common\BaseModel;

class GetHistoryDatabaseInfoResponse extends BaseModel
{
         /**Object **/
         public  $Databases;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
                $this->Databases = $param["Databases"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}