<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeDataFlowStrategyListResponse extends BaseModel
{
         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         /** 分页大小。默认为10。取值范围1-1000。**/
         public  $PageSize;

         /** 页码。默认为1。**/
         public  $PageNum;

         /** 总个数。**/
         public  $TotalCount;

         /**Object 数据流动策略列表**/
         public  $Data;

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
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
                $this->PageNum = $param["PageNum"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }

        }
}