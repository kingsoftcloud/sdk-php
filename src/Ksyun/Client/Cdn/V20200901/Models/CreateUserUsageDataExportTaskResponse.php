<?php
namespace  Ksyun\Client\Cdn\V20200901\Models;

use Ksyun\Common\BaseModel;

class CreateUserUsageDataExportTaskResponse extends BaseModel
{
         /** **/
         public  $StartTime;

         /** **/
         public  $EndTime;

         /** **/
         public  $CdnType;

         /** **/
         public  $TaskId;

         /** **/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
                $this->StartTime = $param["StartTime"];
            }
            if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
                $this->EndTime = $param["EndTime"];
            }
            if (array_key_exists("CdnType",$param) and $param["CdnType"] !== null) {
                $this->CdnType = $param["CdnType"];
            }
            if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
                $this->TaskId = $param["TaskId"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}