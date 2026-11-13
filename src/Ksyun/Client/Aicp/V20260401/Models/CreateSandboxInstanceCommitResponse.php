<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;

class CreateSandboxInstanceCommitResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 提交任务ID**/
         public  $TaskId;

         /** 任务初始状态（Pending）**/
         public  $Status;

         /** 目标镜像完整地址**/
         public  $Image;

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
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }
            if (array_key_exists("Image",$param) and $param["Image"] !== null) {
                $this->Image = $param["Image"];
            }

        }
}