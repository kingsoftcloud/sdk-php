<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeDocumentResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 文档 ID**/
         public  $Id;

         /** 在知识库中的位置**/
         public  $Position;

         /** 数据源类型：upload_file**/
         public  $DataSourceType;

         /**Object 数据源详情**/
         public  $DataSourceInfo;

         /** 知识库级处理规则 ID**/
         public  $DatasetProcessRuleId;

         /**Object 知识库级处理规则**/
         public  $DatasetProcessRule;

         /**Object 文档级处理规则**/
         public  $DocumentProcessRule;

         /** 文档名称**/
         public  $Name;

         /** 创建时间戳**/
         public  $CreatedAt;

         /** token 数**/
         public  $Tokens;

         /** 索引状态：waiting / parsing / cleaning / splitting / indexing / completed / error …**/
         public  $IndexingStatus;

         /** 完成时间戳**/
         public  $CompletedAt;

         /** 更新时间戳**/
         public  $UpdatedAt;

         /** 索引耗时（秒）**/
         public  $IndexingLatency;

         /** 错误信息**/
         public  $Error;

         /** 是否启用**/
         public  $Enabled;

         /** 禁用时间戳**/
         public  $DisabledAt;

         /** 是否已归档**/
         public  $Archived;

         /** 分片数**/
         public  $SegmentCount;

         /** 平均分片长度**/
         public  $AverageSegmentLength;

         /** 命中次数**/
         public  $HitCount;

         /** 展示状态：queuing / indexing / available / error**/
         public  $DisplayStatus;

         /** 文档形态：hierarchical_model / qa_model …**/
         public  $DocForm;

         /** 文档语言**/
         public  $DocLanguage;

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
            if (array_key_exists("Id",$param) and $param["Id"] !== null) {
                $this->Id = $param["Id"];
            }
            if (array_key_exists("Position",$param) and $param["Position"] !== null) {
                $this->Position = $param["Position"];
            }
            if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
                $this->DataSourceType = $param["DataSourceType"];
            }
            if (array_key_exists("DataSourceInfo",$param) and $param["DataSourceInfo"] !== null) {
                $this->DataSourceInfo = $param["DataSourceInfo"];
            }
            if (array_key_exists("DatasetProcessRuleId",$param) and $param["DatasetProcessRuleId"] !== null) {
                $this->DatasetProcessRuleId = $param["DatasetProcessRuleId"];
            }
            if (array_key_exists("DatasetProcessRule",$param) and $param["DatasetProcessRule"] !== null) {
                $this->DatasetProcessRule = $param["DatasetProcessRule"];
            }
            if (array_key_exists("DocumentProcessRule",$param) and $param["DocumentProcessRule"] !== null) {
                $this->DocumentProcessRule = $param["DocumentProcessRule"];
            }
            if (array_key_exists("Name",$param) and $param["Name"] !== null) {
                $this->Name = $param["Name"];
            }
            if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
                $this->CreatedAt = $param["CreatedAt"];
            }
            if (array_key_exists("Tokens",$param) and $param["Tokens"] !== null) {
                $this->Tokens = $param["Tokens"];
            }
            if (array_key_exists("IndexingStatus",$param) and $param["IndexingStatus"] !== null) {
                $this->IndexingStatus = $param["IndexingStatus"];
            }
            if (array_key_exists("CompletedAt",$param) and $param["CompletedAt"] !== null) {
                $this->CompletedAt = $param["CompletedAt"];
            }
            if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
                $this->UpdatedAt = $param["UpdatedAt"];
            }
            if (array_key_exists("IndexingLatency",$param) and $param["IndexingLatency"] !== null) {
                $this->IndexingLatency = $param["IndexingLatency"];
            }
            if (array_key_exists("Error",$param) and $param["Error"] !== null) {
                $this->Error = $param["Error"];
            }
            if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
                $this->Enabled = $param["Enabled"];
            }
            if (array_key_exists("DisabledAt",$param) and $param["DisabledAt"] !== null) {
                $this->DisabledAt = $param["DisabledAt"];
            }
            if (array_key_exists("Archived",$param) and $param["Archived"] !== null) {
                $this->Archived = $param["Archived"];
            }
            if (array_key_exists("SegmentCount",$param) and $param["SegmentCount"] !== null) {
                $this->SegmentCount = $param["SegmentCount"];
            }
            if (array_key_exists("AverageSegmentLength",$param) and $param["AverageSegmentLength"] !== null) {
                $this->AverageSegmentLength = $param["AverageSegmentLength"];
            }
            if (array_key_exists("HitCount",$param) and $param["HitCount"] !== null) {
                $this->HitCount = $param["HitCount"];
            }
            if (array_key_exists("DisplayStatus",$param) and $param["DisplayStatus"] !== null) {
                $this->DisplayStatus = $param["DisplayStatus"];
            }
            if (array_key_exists("DocForm",$param) and $param["DocForm"] !== null) {
                $this->DocForm = $param["DocForm"];
            }
            if (array_key_exists("DocLanguage",$param) and $param["DocLanguage"] !== null) {
                $this->DocLanguage = $param["DocLanguage"];
            }

        }
}