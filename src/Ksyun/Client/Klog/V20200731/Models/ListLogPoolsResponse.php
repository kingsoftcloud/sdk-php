<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;

class ListLogPoolsResponse extends BaseModel
{
         /** 工程名称
**/
         public  $ProjectName;

         /** 日志池总数**/
         public  $Total;

         /** 本次返回日志池数量**/
         public  $Count;

         /**Object 日志池列表**/
         public  $LogPools;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
                $this->ProjectName = $param["ProjectName"];
            }
            if (array_key_exists("Total",$param) and $param["Total"] !== null) {
                $this->Total = $param["Total"];
            }
            if (array_key_exists("Count",$param) and $param["Count"] !== null) {
                $this->Count = $param["Count"];
            }
            if (array_key_exists("LogPools",$param) and $param["LogPools"] !== null) {
                $this->LogPools = $param["LogPools"];
            }

        }
}