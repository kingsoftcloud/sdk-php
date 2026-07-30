<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;

class DescribeMemoryTokenMonitorResponse extends BaseModel
{
         /** 请求唯一标识**/
         public  $RequestId;

         /** Embedding模型输入token数**/
         public  $EmbeddingInputTokens;

         /** Rerank模型输入token数**/
         public  $RerankInputTokens;

         /** Chat模型输出token数**/
         public  $ChatOutputTokens;

         /** Chat模型缓存命中token数**/
         public  $ChatHitCacheTokens;

         /** Chat模型缓存未命中token数**/
         public  $ChatMissCacheTokens;

         /**Object 请求次数趋势**/
         public  $RequestCountTrend;

         /**Object Embedding输入token趋势**/
         public  $EmbeddingInputTokenTrend;

         /**Object Rerank输入token趋势**/
         public  $RerankInputTokenTrend;

         /**Object Chat输出token趋势**/
         public  $ChatOutputCountTrend;

         /**Object Chat缓存命中token趋势**/
         public  $ChatHitCacheCountTrend;

         /**Object Chat缓存未命中token趋势**/
         public  $ChatMissCacheCountTrend;

         /**Object RPM限流配置**/
         public  $RpmRateLimits;

         /**Object Tmp限流配置**/
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
            if (array_key_exists("ChatOutputTokens",$param) and $param["ChatOutputTokens"] !== null) {
                $this->ChatOutputTokens = $param["ChatOutputTokens"];
            }
            if (array_key_exists("ChatHitCacheTokens",$param) and $param["ChatHitCacheTokens"] !== null) {
                $this->ChatHitCacheTokens = $param["ChatHitCacheTokens"];
            }
            if (array_key_exists("ChatMissCacheTokens",$param) and $param["ChatMissCacheTokens"] !== null) {
                $this->ChatMissCacheTokens = $param["ChatMissCacheTokens"];
            }
            if (array_key_exists("RequestCountTrend",$param) and $param["RequestCountTrend"] !== null) {
                $this->RequestCountTrend = $param["RequestCountTrend"];
            }
            if (array_key_exists("EmbeddingInputTokenTrend",$param) and $param["EmbeddingInputTokenTrend"] !== null) {
                $this->EmbeddingInputTokenTrend = $param["EmbeddingInputTokenTrend"];
            }
            if (array_key_exists("RerankInputTokenTrend",$param) and $param["RerankInputTokenTrend"] !== null) {
                $this->RerankInputTokenTrend = $param["RerankInputTokenTrend"];
            }
            if (array_key_exists("ChatOutputCountTrend",$param) and $param["ChatOutputCountTrend"] !== null) {
                $this->ChatOutputCountTrend = $param["ChatOutputCountTrend"];
            }
            if (array_key_exists("ChatHitCacheCountTrend",$param) and $param["ChatHitCacheCountTrend"] !== null) {
                $this->ChatHitCacheCountTrend = $param["ChatHitCacheCountTrend"];
            }
            if (array_key_exists("ChatMissCacheCountTrend",$param) and $param["ChatMissCacheCountTrend"] !== null) {
                $this->ChatMissCacheCountTrend = $param["ChatMissCacheCountTrend"];
            }
            if (array_key_exists("RpmRateLimits",$param) and $param["RpmRateLimits"] !== null) {
                $this->RpmRateLimits = $param["RpmRateLimits"];
            }
            if (array_key_exists("TpmRateLimits",$param) and $param["TpmRateLimits"] !== null) {
                $this->TpmRateLimits = $param["TpmRateLimits"];
            }

        }
}