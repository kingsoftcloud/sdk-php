<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class ListAuditResponse extends BaseModel
{
         /**Object 审计数据列表
**/
         public  $AuditRows;

         /** 总条数	
**/
         public  $TotalCount;

         /** 开始条数	
**/
         public  $Marker;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("AuditRows",$param) and $param["AuditRows"] !== null) {
                $this->AuditRows = $param["AuditRows"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }

        }
}