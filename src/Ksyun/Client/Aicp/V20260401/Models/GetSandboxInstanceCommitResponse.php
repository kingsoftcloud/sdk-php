<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;

class GetSandboxInstanceCommitResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 提交任务ID**/
         public  $TaskId;

         /** 容器名称**/
         public  $ContainerName;

         /** 任务创建时间**/
         public  $CreatedAt;

         /** 任务最终状态（Pending/Running/Succeeded/Failed）**/
         public  $Status;

         /** 目标镜像完整地址**/
         public  $Image;

         /** KCI任务阶段**/
         public  $Stage;

         /** 镜像摘要**/
         public  $ImageDigest;

         /** 镜像引用（地址@摘要）**/
         public  $ImageRef;

         /** 任务开始时间**/
         public  $StartedAt;

         /** 任务完成时间**/
         public  $FinishedAt;

         /** 最后观测时间**/
         public  $LastObservedAt;

         /** 失败时的错误码（仅任务失败时返回）**/
         public  $ErrorCode;

         /** 失败时的错误信息（仅任务失败时返回）**/
         public  $Message;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
                $this->TaskId = $param["TaskId"];
            }
            if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
                $this->ContainerName = $param["ContainerName"];
            }
            if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
                $this->CreatedAt = $param["CreatedAt"];
            }
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }
            if (array_key_exists("Image",$param) and $param["Image"] !== null) {
                $this->Image = $param["Image"];
            }
            if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
                $this->Stage = $param["Stage"];
            }
            if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
                $this->ImageDigest = $param["ImageDigest"];
            }
            if (array_key_exists("ImageRef",$param) and $param["ImageRef"] !== null) {
                $this->ImageRef = $param["ImageRef"];
            }
            if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
                $this->StartedAt = $param["StartedAt"];
            }
            if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
                $this->FinishedAt = $param["FinishedAt"];
            }
            if (array_key_exists("LastObservedAt",$param) and $param["LastObservedAt"] !== null) {
                $this->LastObservedAt = $param["LastObservedAt"];
            }
            if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
                $this->ErrorCode = $param["ErrorCode"];
            }
            if (array_key_exists("Message",$param) and $param["Message"] !== null) {
                $this->Message = $param["Message"];
            }

        }
}