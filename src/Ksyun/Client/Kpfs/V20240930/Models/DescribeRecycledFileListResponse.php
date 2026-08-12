<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeRecycledFileListResponse extends BaseModel
{
         /**Object 文件列表**/
         public  $Files;

         /** 回收站内文件总大小，仅容量型/标准型支持**/
         public  $TotalBytes;

         /** 回收站内文件总数量，仅容量型/标准型支持**/
         public  $TotalCount;

         /** 唯一请求ID，每次请求都会返回。**/
         public  $RequestId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("Files",$param) and $param["Files"] !== null) {
                $this->Files = $param["Files"];
            }
            if (array_key_exists("TotalBytes",$param) and $param["TotalBytes"] !== null) {
                $this->TotalBytes = $param["TotalBytes"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }

        }
}