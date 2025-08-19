<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;

class DescribeSoSecurityGroupsResponse extends BaseModel
{
         /**Object **/
         public  $SecurityGroups;

         /** InNnLTNyNDk2Y2ozZmV0eGM3enJ4OXdncXR4d3ki**/
         public  $NextToken;

         /** 6d92d1e6-225c-4320-af84-21110b163a38**/
         public  $RequestId;

         /** true**/
         public  $Return;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
                $this->SecurityGroups = $param["SecurityGroups"];
            }
            if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
                $this->NextToken = $param["NextToken"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("Return",$param) and $param["Return"] !== null) {
                $this->Return = $param["Return"];
            }

        }
}