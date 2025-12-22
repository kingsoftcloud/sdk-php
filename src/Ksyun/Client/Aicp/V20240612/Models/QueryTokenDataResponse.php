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

        }
}