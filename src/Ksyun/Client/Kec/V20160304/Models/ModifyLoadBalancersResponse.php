<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyLoadBalancersResponse extends BaseModel
{
         /** **/
         public  $ModifyLoadBalancersResponse;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ModifyLoadBalancersResponse",$param) and $param["ModifyLoadBalancersResponse"] !== null) {
                $this->ModifyLoadBalancersResponse = $param["ModifyLoadBalancersResponse"];
            }

        }
}