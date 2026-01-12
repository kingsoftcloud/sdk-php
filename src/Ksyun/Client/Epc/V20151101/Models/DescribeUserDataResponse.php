<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeUserDataResponse extends BaseModel
{
         /** **/
         public  $HostId;

         /** **/
         public  $UserDefinedData;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
                $this->HostId = $param["HostId"];
            }
            if (array_key_exists("UserDefinedData",$param) and $param["UserDefinedData"] !== null) {
                $this->UserDefinedData = $param["UserDefinedData"];
            }

        }
}