<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeKnowledgeBaseResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** 知识库 ID**/
         public  $Id;

         /** 知识库名称**/
         public  $Name;

         /** 描述**/
         public  $Description;

         /** 提供商**/
         public  $Provider;

         /** 数据源类型**/
         public  $DataSourceType;

         /** 索引方式**/
         public  $IndexingTechnique;

         /** 关联应用数**/
         public  $AppCount;

         /** 文档数**/
         public  $DocumentCount;

         /** 总词数**/
         public  $WordCount;

         /** 创建人**/
         public  $CreatedBy;

         /** 创建时间戳**/
         public  $CreatedAt;

         /** 更新人**/
         public  $UpdatedBy;

         /** 更新时间戳**/
         public  $UpdatedAt;

         /** 嵌入模型**/
         public  $EmbeddingModel;

         /** 嵌入模型提供商**/
         public  $EmbeddingModelProvider;

         /** 模型是否可用**/
         public  $EmbeddingAvailable;

         /**Object 检索模型配置**/
         public  $RetrievalModelDict;

         /**String 标签列表**/
         public  $Tags;

         /** 文档形态**/
         public  $DocForm;

         /**Object 外部知识库信息**/
         public  $ExternalKnowledgeInfo;

         /**Object 外部检索参数**/
         public  $ExternalRetrievalModel;

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
            if (array_key_exists("Name",$param) and $param["Name"] !== null) {
                $this->Name = $param["Name"];
            }
            if (array_key_exists("Description",$param) and $param["Description"] !== null) {
                $this->Description = $param["Description"];
            }
            if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
                $this->Provider = $param["Provider"];
            }
            if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
                $this->DataSourceType = $param["DataSourceType"];
            }
            if (array_key_exists("IndexingTechnique",$param) and $param["IndexingTechnique"] !== null) {
                $this->IndexingTechnique = $param["IndexingTechnique"];
            }
            if (array_key_exists("AppCount",$param) and $param["AppCount"] !== null) {
                $this->AppCount = $param["AppCount"];
            }
            if (array_key_exists("DocumentCount",$param) and $param["DocumentCount"] !== null) {
                $this->DocumentCount = $param["DocumentCount"];
            }
            if (array_key_exists("WordCount",$param) and $param["WordCount"] !== null) {
                $this->WordCount = $param["WordCount"];
            }
            if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
                $this->CreatedBy = $param["CreatedBy"];
            }
            if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
                $this->CreatedAt = $param["CreatedAt"];
            }
            if (array_key_exists("UpdatedBy",$param) and $param["UpdatedBy"] !== null) {
                $this->UpdatedBy = $param["UpdatedBy"];
            }
            if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
                $this->UpdatedAt = $param["UpdatedAt"];
            }
            if (array_key_exists("EmbeddingModel",$param) and $param["EmbeddingModel"] !== null) {
                $this->EmbeddingModel = $param["EmbeddingModel"];
            }
            if (array_key_exists("EmbeddingModelProvider",$param) and $param["EmbeddingModelProvider"] !== null) {
                $this->EmbeddingModelProvider = $param["EmbeddingModelProvider"];
            }
            if (array_key_exists("EmbeddingAvailable",$param) and $param["EmbeddingAvailable"] !== null) {
                $this->EmbeddingAvailable = $param["EmbeddingAvailable"];
            }
            if (array_key_exists("RetrievalModelDict",$param) and $param["RetrievalModelDict"] !== null) {
                $this->RetrievalModelDict = $param["RetrievalModelDict"];
            }
            if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
                $this->Tags = $param["Tags"];
            }
            if (array_key_exists("DocForm",$param) and $param["DocForm"] !== null) {
                $this->DocForm = $param["DocForm"];
            }
            if (array_key_exists("ExternalKnowledgeInfo",$param) and $param["ExternalKnowledgeInfo"] !== null) {
                $this->ExternalKnowledgeInfo = $param["ExternalKnowledgeInfo"];
            }
            if (array_key_exists("ExternalRetrievalModel",$param) and $param["ExternalRetrievalModel"] !== null) {
                $this->ExternalRetrievalModel = $param["ExternalRetrievalModel"];
            }

        }
}