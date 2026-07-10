<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeKnowledgeTokenMonitorResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** Embedding模型输入token数**/
         public  $EmbeddingInputTokens;

         /** Rerank模型输入token数**/
         public  $RerankInputTokens;

         /**Object Embedding输入token趋势**/
         public  $EmbeddingInputTokenTrend;

         /**Object Rerank输入token趋势**/
         public  $RerankInputTokenTrend;

         /**Object 请求次数趋势**/
         public  $RequestCountTrend;

         /**Object RPM限流配置**/
         public  $RpmRateLimits;

         /**Object TPM限流配置**/
         public  $TpmRateLimits;

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
            if (array_key_exists("EmbeddingInputTokens",$param) and $param["EmbeddingInputTokens"] !== null) {
                $this->EmbeddingInputTokens = $param["EmbeddingInputTokens"];
            }
            if (array_key_exists("RerankInputTokens",$param) and $param["RerankInputTokens"] !== null) {
                $this->RerankInputTokens = $param["RerankInputTokens"];
            }
            if (array_key_exists("EmbeddingInputTokenTrend",$param) and $param["EmbeddingInputTokenTrend"] !== null) {
                $this->EmbeddingInputTokenTrend = $param["EmbeddingInputTokenTrend"];
            }
            if (array_key_exists("RerankInputTokenTrend",$param) and $param["RerankInputTokenTrend"] !== null) {
                $this->RerankInputTokenTrend = $param["RerankInputTokenTrend"];
            }
            if (array_key_exists("RequestCountTrend",$param) and $param["RequestCountTrend"] !== null) {
                $this->RequestCountTrend = $param["RequestCountTrend"];
            }
            if (array_key_exists("RpmRateLimits",$param) and $param["RpmRateLimits"] !== null) {
                $this->RpmRateLimits = $param["RpmRateLimits"];
            }
            if (array_key_exists("TpmRateLimits",$param) and $param["TpmRateLimits"] !== null) {
                $this->TpmRateLimits = $param["TpmRateLimits"];
            }

        }
}