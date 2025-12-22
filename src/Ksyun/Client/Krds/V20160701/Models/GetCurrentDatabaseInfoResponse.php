<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class GetCurrentDatabaseInfoResponse extends BaseModel
{
         /**Object 实例数据库表信息返回数据域**/
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