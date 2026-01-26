<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeDirQuotaResponse extends BaseModel
{
         /** 唯一请求ID**/
         public  $RequestId;

         /** 容量硬阈值，单位Byte**/
         public  $LogicalHardThreshold;

         /** 已用容量，单位Byte**/
         public  $LogicalUsedCapacity;

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
            if (array_key_exists("LogicalHardThreshold",$param) and $param["LogicalHardThreshold"] !== null) {
                $this->LogicalHardThreshold = $param["LogicalHardThreshold"];
            }
            if (array_key_exists("LogicalUsedCapacity",$param) and $param["LogicalUsedCapacity"] !== null) {
                $this->LogicalUsedCapacity = $param["LogicalUsedCapacity"];
            }

        }
}