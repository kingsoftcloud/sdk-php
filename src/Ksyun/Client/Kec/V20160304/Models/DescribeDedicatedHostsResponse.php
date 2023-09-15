<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDedicatedHostsResponse extends BaseModel
{
         /** 

- 请求ID
- 类型: String

**/
         public  $RequestId;

         /** 

- 专属宿主机ID
- 类型：String


**/
         public  $DedicatedHostId;

         /** 

- 专属宿主机名称
- 类型：String


**/
         public  $DedicatedHostName;

         /** 

- 状态
- 类型：String


**/
         public  $State;

         /** 

- 虚拟核数
- 类型：int

**/
         public  $TotalCpu;

         /** 

- CPU核数
- 类型：int

**/
         public  $OriCpu;

         /** 

- 可用CPU核数
- 类型：int

**/
         public  $AvailableCpu;

         /** 

- 总内存大小
- 类型：int

**/
         public  $TotalMemory;

         /** 

- 可用内存
- 类型：int

**/
         public  $AvailableMemory;

         /** 

- 总磁盘大小
- 类型：int

**/
         public  $TotalDatadisk;

         /** 

- 可用磁盘大小
- 类型：int

**/
         public  $AvailableDatadisk;

         /** 

- 创建时间
- 类型：String

**/
         public  $CreateDate;

         /** 

- 可用区英文名
- 类型：String

**/
         public  $AvailabilityZone;

         /** 

- 可用区中文名
- 类型：String

Model

- 机型
- 类型：String

**/
         public  $AvailabilityZoneName;

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
            if (array_key_exists("DedicatedHostId",$param) and $param["DedicatedHostId"] !== null) {
                $this->DedicatedHostId = $param["DedicatedHostId"];
            }
            if (array_key_exists("DedicatedHostName",$param) and $param["DedicatedHostName"] !== null) {
                $this->DedicatedHostName = $param["DedicatedHostName"];
            }
            if (array_key_exists("State",$param) and $param["State"] !== null) {
                $this->State = $param["State"];
            }
            if (array_key_exists("TotalCpu",$param) and $param["TotalCpu"] !== null) {
                $this->TotalCpu = $param["TotalCpu"];
            }
            if (array_key_exists("OriCpu",$param) and $param["OriCpu"] !== null) {
                $this->OriCpu = $param["OriCpu"];
            }
            if (array_key_exists("AvailableCpu",$param) and $param["AvailableCpu"] !== null) {
                $this->AvailableCpu = $param["AvailableCpu"];
            }
            if (array_key_exists("TotalMemory",$param) and $param["TotalMemory"] !== null) {
                $this->TotalMemory = $param["TotalMemory"];
            }
            if (array_key_exists("AvailableMemory",$param) and $param["AvailableMemory"] !== null) {
                $this->AvailableMemory = $param["AvailableMemory"];
            }
            if (array_key_exists("TotalDatadisk",$param) and $param["TotalDatadisk"] !== null) {
                $this->TotalDatadisk = $param["TotalDatadisk"];
            }
            if (array_key_exists("AvailableDatadisk",$param) and $param["AvailableDatadisk"] !== null) {
                $this->AvailableDatadisk = $param["AvailableDatadisk"];
            }
            if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
                $this->CreateDate = $param["CreateDate"];
            }
            if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
                $this->AvailabilityZone = $param["AvailabilityZone"];
            }
            if (array_key_exists("AvailabilityZoneName",$param) and $param["AvailabilityZoneName"] !== null) {
                $this->AvailabilityZoneName = $param["AvailabilityZoneName"];
            }

        }
}