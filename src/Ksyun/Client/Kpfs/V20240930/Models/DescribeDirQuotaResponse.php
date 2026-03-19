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

         /** 容量配额的设置方式。参数取值：

none：无设置。仅KPFS性能型支持。

statistics：仅统计。仅KPFS性能型支持。

limit：限制类型。KPFS容量型、标准型、性能型均支持。**/
         public  $LogicalCapacityType;

         /** Inodes配额的设置方式，仅KPFS性能型支持。参数取值：

none：无设置

statistics：仅统计

limit：限制类型。**/
         public  $LogicalInodesType;

         /** Inodes硬阈值，仅KPFS性能型支持。单位个。**/
         public  $LogicalHardInodes;

         /** 已用Inodes，仅KPFS性能型支持。单位个。**/
         public  $LogicalUsedInodes;

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
            if (array_key_exists("LogicalCapacityType",$param) and $param["LogicalCapacityType"] !== null) {
                $this->LogicalCapacityType = $param["LogicalCapacityType"];
            }
            if (array_key_exists("LogicalInodesType",$param) and $param["LogicalInodesType"] !== null) {
                $this->LogicalInodesType = $param["LogicalInodesType"];
            }
            if (array_key_exists("LogicalHardInodes",$param) and $param["LogicalHardInodes"] !== null) {
                $this->LogicalHardInodes = $param["LogicalHardInodes"];
            }
            if (array_key_exists("LogicalUsedInodes",$param) and $param["LogicalUsedInodes"] !== null) {
                $this->LogicalUsedInodes = $param["LogicalUsedInodes"];
            }

        }
}