<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;

class GetLogsResponse extends BaseModel
{
         /** 满足条件的数据总量**/
         public  $Total;

         /** 当前返回的数据条数**/
         public  $Count;

         /** 查询语句是否为sql**/
         public  $HasSql;

         /**Object 日志列表**/
         public  $Logs;

         /**Object 按时间间隔统计的数据条数**/
         public  $Histogram;

         /**String 返回数据的字段名称列表**/
         public  $Keys;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Count",$param) and $param["Count"] !== null) {
                $this->Count = $param["Count"];
            }
            if (array_key_exists("HasSql",$param) and $param["HasSql"] !== null) {
                $this->HasSql = $param["HasSql"];
            }
            if (array_key_exists("Logs",$param) and $param["Logs"] !== null) {
                $this->Logs = $param["Logs"];
            }
            if (array_key_exists("Histogram",$param) and $param["Histogram"] !== null) {
                $this->Histogram = $param["Histogram"];
            }
            if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
                $this->Keys = $param["Keys"];
            }

        }
}