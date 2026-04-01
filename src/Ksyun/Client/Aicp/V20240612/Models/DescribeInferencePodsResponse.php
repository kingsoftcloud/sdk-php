<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;

class DescribeInferencePodsResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 总数量**/
         public  $TotalCount;

         /** 页码**/
         public  $Page;

         /** 单次调用返回最大条目个数**/
         public  $PageSize;

         /**Object 推理任务pod列表**/
         public  $Pods;

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
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Page",$param) and $param["Page"] !== null) {
                $this->Page = $param["Page"];
            }
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
                $this->Pods = $param["Pods"];
            }

        }
}