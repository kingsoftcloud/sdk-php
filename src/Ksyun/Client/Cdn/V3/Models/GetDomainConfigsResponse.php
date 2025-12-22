<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetDomainConfigsResponse extends BaseModel
{
         /** 对应的配置数据，参考上面ConfigList的请求参数名和返回参数名的对应关系
**/
         public  $DomainConfigs;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DomainConfigs",$param) and $param["DomainConfigs"] !== null) {
                $this->DomainConfigs = $param["DomainConfigs"];
            }

        }
}