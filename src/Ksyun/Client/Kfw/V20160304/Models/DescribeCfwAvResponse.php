<?php
namespace  Ksyun\Client\Kfw\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeCfwAvResponse extends BaseModel
{
         /** **/
         public  $RequestId;

         /**Object **/
         public  $CfwAvs;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("CfwAvs",$param) and $param["CfwAvs"] !== null) {
                $this->CfwAvs = $param["CfwAvs"];
            }

        }
}