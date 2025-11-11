<?php
namespace  Ksyun\Client\Klog\V20200731\Models;

use Ksyun\Common\BaseModel;

class DescribeProjectResponse extends BaseModel
{
         /** 工程名称**/
         public  $ProjectName;

         /** 项目制名称**/
         public  $IamProjectName;

         /** 项目制ID**/
         public  $IamProjectId;

         /** 工程创建时间**/
         public  $CreateTime;

         /** 工程更新时间**/
         public  $UpdateTime;

         /** 区域编码**/
         public  $Region;

         /** 工程状态**/
         public  $Status;

         /**Object 标签列表**/
         public  $Tags;

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
            if (array_key_exists("IamProjectName",$param) and $param["IamProjectName"] !== null) {
                $this->IamProjectName = $param["IamProjectName"];
            }
            if (array_key_exists("IamProjectId",$param) and $param["IamProjectId"] !== null) {
                $this->IamProjectId = $param["IamProjectId"];
            }
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }
            if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
                $this->UpdateTime = $param["UpdateTime"];
            }
            if (array_key_exists("Region",$param) and $param["Region"] !== null) {
                $this->Region = $param["Region"];
            }
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }
            if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
                $this->Tags = $param["Tags"];
            }

        }
}