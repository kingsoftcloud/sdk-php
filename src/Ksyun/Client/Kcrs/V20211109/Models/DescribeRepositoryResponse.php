<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeRepositoryResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 单次调用返回的最大实例数**/
         public  $MaxResults;

         /** 分页标识，如果调用未返回全部实例，标记下次调用的返回值的起点，如果已返回全部实例，则其值为0**/
         public  $Marker;

         /** 镜像仓库数量**/
         public  $TotalCount;

         /**Object 响应实体类**/
         public  $RepoSet;

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
            if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
                $this->MaxResults = $param["MaxResults"];
            }
            if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
                $this->Marker = $param["Marker"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("RepoSet",$param) and $param["RepoSet"] !== null) {
                $this->RepoSet = $param["RepoSet"];
            }

        }
}