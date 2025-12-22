<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;

class DeleteClusterResponse extends BaseModel
{
         /** 请求ID**/
         public  $Request;

         /** 返回数据**/
         public  $Data;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Request",$param) and $param["Request"] !== null) {
                $this->Request = $param["Request"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}