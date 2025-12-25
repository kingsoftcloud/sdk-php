<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetBlockUrlQuotaResponse extends BaseModel
{
         /** 屏蔽URL的上限条数**/
         public  $BlockUrlQuota;

         /** 剩余屏蔽 Url的 条数**/
         public  $BlockUrlSurplus;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("BlockUrlQuota",$param) and $param["BlockUrlQuota"] !== null) {
                $this->BlockUrlQuota = $param["BlockUrlQuota"];
            }
            if (array_key_exists("BlockUrlSurplus",$param) and $param["BlockUrlSurplus"] !== null) {
                $this->BlockUrlSurplus = $param["BlockUrlSurplus"];
            }

        }
}