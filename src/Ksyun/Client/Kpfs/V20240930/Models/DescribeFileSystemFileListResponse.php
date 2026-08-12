<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeFileSystemFileListResponse extends BaseModel
{
         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         /**Object 目录或文件数据。**/
         public  $Data;

         /** 分页大小。**/
         public  $PageSize;

         /** 页码。**/
         public  $PageNum;

         /** 文件系统的文件总数。**/
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
            if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
                $this->PageSize = $param["PageSize"];
            }
            if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
                $this->PageNum = $param["PageNum"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }

        }
}