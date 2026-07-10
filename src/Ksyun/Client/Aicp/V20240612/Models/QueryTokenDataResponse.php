<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class QueryTokenDataResponse extends BaseModel
{
         /** 总条数，分页展示用。**/
         public  $TotalCount;

         /** 本次获取数据的最后一条值，分页游标。**/
         public  $LastKey;

         /** 总的输入tokens量**/
         public  $SumInputToken;

         /** 总的输出tokens量**/
         public  $SumOutputToken;

         /** 总的tokens量**/
         public  $SumTotalToken;

         /**Object **/
         public  $Data;

         /** 总的缓存命中量**/
         public  $SumTotalCacheToken;

         /** 总的缓存未命中量**/
         public  $SumTotalCacheMissToken;

         /** 总的联网搜索次数**/
         public  $SumTotalWebSearch;

         /** 总共生成图片数量（张）**/
         public  $SumTotalImageCount;

         /** 总共生成视频时长（s）**/
         public  $SumTotalVideoDuration;

         /** 网页解析次数**/
         public  $SumTotalWebParser;

         /** 总的音频缓存量**/
         public  $SumTotalCacheAudioToken;

         /** 总的图片缓存token量**/
         public  $SumTotalCacheImageToken;

         /** 总的显式缓存命中量**/
         public  $SumTotalEphemeralCacheToken;

         /** 总的音频未命中量**/
         public  $SumTotalCacheMissAudioToken;

         /** 总队图片缓存未命中量**/
         public  $SumTotalCacheMissImageToken;

         /** 总的文转语音文字输入字符数**/
         public  $SumTotalVoiceWordCount;

         /** 总的图片输出token数**/
         public  $SumTotalImageOutputToken;

         /** 总的5分钟缓存写入量**/
         public  $SumTotalCreationCache5mToken;

         /** 总的1小时缓存写入量**/
         public  $SumTotalCreationCache1hToken;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("LastKey",$param) and $param["LastKey"] !== null) {
                $this->LastKey = $param["LastKey"];
            }
            if (array_key_exists("SumInputToken",$param) and $param["SumInputToken"] !== null) {
                $this->SumInputToken = $param["SumInputToken"];
            }
            if (array_key_exists("SumOutputToken",$param) and $param["SumOutputToken"] !== null) {
                $this->SumOutputToken = $param["SumOutputToken"];
            }
            if (array_key_exists("SumTotalToken",$param) and $param["SumTotalToken"] !== null) {
                $this->SumTotalToken = $param["SumTotalToken"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("SumTotalCacheToken",$param) and $param["SumTotalCacheToken"] !== null) {
                $this->SumTotalCacheToken = $param["SumTotalCacheToken"];
            }
            if (array_key_exists("SumTotalCacheMissToken",$param) and $param["SumTotalCacheMissToken"] !== null) {
                $this->SumTotalCacheMissToken = $param["SumTotalCacheMissToken"];
            }
            if (array_key_exists("SumTotalWebSearch",$param) and $param["SumTotalWebSearch"] !== null) {
                $this->SumTotalWebSearch = $param["SumTotalWebSearch"];
            }
            if (array_key_exists("SumTotalImageCount",$param) and $param["SumTotalImageCount"] !== null) {
                $this->SumTotalImageCount = $param["SumTotalImageCount"];
            }
            if (array_key_exists("SumTotalVideoDuration",$param) and $param["SumTotalVideoDuration"] !== null) {
                $this->SumTotalVideoDuration = $param["SumTotalVideoDuration"];
            }
            if (array_key_exists("SumTotalWebParser",$param) and $param["SumTotalWebParser"] !== null) {
                $this->SumTotalWebParser = $param["SumTotalWebParser"];
            }
            if (array_key_exists("SumTotalCacheAudioToken",$param) and $param["SumTotalCacheAudioToken"] !== null) {
                $this->SumTotalCacheAudioToken = $param["SumTotalCacheAudioToken"];
            }
            if (array_key_exists("SumTotalCacheImageToken",$param) and $param["SumTotalCacheImageToken"] !== null) {
                $this->SumTotalCacheImageToken = $param["SumTotalCacheImageToken"];
            }
            if (array_key_exists("SumTotalEphemeralCacheToken",$param) and $param["SumTotalEphemeralCacheToken"] !== null) {
                $this->SumTotalEphemeralCacheToken = $param["SumTotalEphemeralCacheToken"];
            }
            if (array_key_exists("SumTotalCacheMissAudioToken",$param) and $param["SumTotalCacheMissAudioToken"] !== null) {
                $this->SumTotalCacheMissAudioToken = $param["SumTotalCacheMissAudioToken"];
            }
            if (array_key_exists("SumTotalCacheMissImageToken",$param) and $param["SumTotalCacheMissImageToken"] !== null) {
                $this->SumTotalCacheMissImageToken = $param["SumTotalCacheMissImageToken"];
            }
            if (array_key_exists("SumTotalVoiceWordCount",$param) and $param["SumTotalVoiceWordCount"] !== null) {
                $this->SumTotalVoiceWordCount = $param["SumTotalVoiceWordCount"];
            }
            if (array_key_exists("SumTotalImageOutputToken",$param) and $param["SumTotalImageOutputToken"] !== null) {
                $this->SumTotalImageOutputToken = $param["SumTotalImageOutputToken"];
            }
            if (array_key_exists("SumTotalCreationCache5mToken",$param) and $param["SumTotalCreationCache5mToken"] !== null) {
                $this->SumTotalCreationCache5mToken = $param["SumTotalCreationCache5mToken"];
            }
            if (array_key_exists("SumTotalCreationCache1hToken",$param) and $param["SumTotalCreationCache1hToken"] !== null) {
                $this->SumTotalCreationCache1hToken = $param["SumTotalCreationCache1hToken"];
            }

        }
}