<?php
namespace  Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceShardInfoResponse extends BaseModel
{
         /** 5cd1f522-6975-4ed1-a8db-71830dfb8b92**/
         public  $RequestId;

         /** 0**/
         public  $Code;

         /** success**/
         public  $Message;

         /** **/
         public  $Data;

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
            if (array_key_exists("Code",$param) and $param["Code"] !== null) {
                $this->Code = $param["Code"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}