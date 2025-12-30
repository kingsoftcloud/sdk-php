<?php
namespace  Ksyun\Client\Cdn\V3\Models;

use Ksyun\Common\BaseModel;

class GetDomainLogsResponse extends BaseModel
{
         /** 域名ID**/
         public  $DomainId;

         /** 整页大小**/
         public  $PageSize;

         /** 页码**/
         public  $PageNumber;

         /** 日志总条数**/
         public  $TotalCount;

         /**Object **/
         public  $DomainLogs;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
                $this->DomainId = $param["DomainId"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
                $this->PageNumber = $param["PageNumber"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("DomainLogs",$param) and $param["DomainLogs"] !== null) {
                $this->DomainLogs = $param["DomainLogs"];
            }

        }
}