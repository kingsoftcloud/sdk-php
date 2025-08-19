<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeSoSubnetResponse extends BaseModel
{
         /** 1ded7233-54f8-44d1-a2ea-b6fcc0ca7390**/
         public  $RequestId;

         /**Object **/
         public  $Subnets;

         /** **/
         public  $NextToken;

         /** 1**/
         public  $TotalCount;

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
            if (array_key_exists("Subnets",$param) and $param["Subnets"] !== null) {
                $this->Subnets = $param["Subnets"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }

        }
}