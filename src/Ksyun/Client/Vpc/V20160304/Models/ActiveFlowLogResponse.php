<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ActiveFlowLogResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 流日志的ID**/
         public  $FlowLogId;

         /** 流日志的名称**/
         public  $FlowLogName;

         /** 关联的资源类型,现版本只支持网卡**/
         public  $ResourceType;

         /** 关联的资源Id**/
         public  $ResourceId;

         /** 采集的流量类型,目前仅支持All**/
         public  $TrafficType;

         /** 管理捕获到的流量的 Project 名称**/
         public  $ProjectName;

         /** 存储捕获到的流量的 LogPool 名称**/
         public  $LogPoolName;

         /** 采集窗口时间（60s~600s）**/
         public  $WindowTime;

         /** 流日志描述**/
         public  $Description;

         /** 创建时间**/
         public  $CreateTime;

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
            if (array_key_exists("FlowLogId",$param) and $param["FlowLogId"] !== null) {
                $this->FlowLogId = $param["FlowLogId"];
            }
            if (array_key_exists("FlowLogName",$param) and $param["FlowLogName"] !== null) {
                $this->FlowLogName = $param["FlowLogName"];
            }
            if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
                $this->ResourceType = $param["ResourceType"];
            }
            if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
                $this->ResourceId = $param["ResourceId"];
            }
            if (array_key_exists("TrafficType",$param) and $param["TrafficType"] !== null) {
                $this->TrafficType = $param["TrafficType"];
            }
            if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
                $this->ProjectName = $param["ProjectName"];
            }
            if (array_key_exists("LogPoolName",$param) and $param["LogPoolName"] !== null) {
                $this->LogPoolName = $param["LogPoolName"];
            }
            if (array_key_exists("WindowTime",$param) and $param["WindowTime"] !== null) {
                $this->WindowTime = $param["WindowTime"];
            }
            if (array_key_exists("Description",$param) and $param["Description"] !== null) {
                $this->Description = $param["Description"];
            }
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }

        }
}