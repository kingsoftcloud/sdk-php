<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribePerformanceOneNfsAclListResponse extends BaseModel
{
         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         /**Object 访问授权列表信息。**/
         public  $Data;

         /** 总数量。**/
         public  $TotalCount;

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
            if (array_key_exists("Data",$param) and $param["Data"] !== null) {
                $this->Data = $param["Data"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }

        }
}