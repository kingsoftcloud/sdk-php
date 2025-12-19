<?php
namespace  Ksyun\Client\Cdn\V20250503\Models;

use Ksyun\Common\BaseModel;

class GetCdnDomainsResponse extends BaseModel
{
         /** 页码**/
         public  $PageNumber;

         /** 单页大小**/
         public  $PageSize;

         /** 总条数**/
         public  $TotalCount;

         /**Object Domain列表**/
         public  $Domains;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
                $this->PageNumber = $param["PageNumber"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
                $this->Domains = $param["Domains"];
            }

        }
}