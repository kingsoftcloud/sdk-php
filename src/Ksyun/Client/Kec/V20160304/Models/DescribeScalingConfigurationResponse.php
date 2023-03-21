<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeScalingConfigurationResponse extends BaseModel
{
         /** 启动配置名称**/
         public  $ScalingConfigurationName;

         /** 镜像ID**/
         public  $ImageId;

         /** 选择云主机类型**/
         public  $InstanceType;

         /** 云主机类型集合**/
         public  $InstanceTypeSet;

         /** 选择云主机计费方式**/
         public  $ChargeType;

         /** 项目制id**/
         public  $ProjectId;

         /** 系统盘类型**/
         public  $SystemDiskType;

         /** 系统盘大小**/
         public  $SystemDiskSize;

         /** 仅购买弹性IP时才返回该值，对应单位为Mbps**/
         public  $AddressBandWidth;

         /** 弹性IP所在的共享带宽ID**/
         public  $BandWidthShareId;

         /** 弹性IP的链路类型的ID**/
         public  $LineId;

         /** 弹性IP项目的ID**/
         public  $AddressProjectId;

         /** 实例名称**/
         public  $InstanceName;

         /** 实例名称后缀**/
         public  $InstanceNameSuffix;

         /** 启动配置创建的ECS实例的标签**/
         public  $TagSet;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("ScalingConfigurationName",$param) and $param["ScalingConfigurationName"] !== null) {
                $this->ScalingConfigurationName = $param["ScalingConfigurationName"];
            }
            if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
                $this->ImageId = $param["ImageId"];
            }
            if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
                $this->InstanceType = $param["InstanceType"];
            }
            if (array_key_exists("InstanceTypeSet",$param) and $param["InstanceTypeSet"] !== null) {
                $this->InstanceTypeSet = $param["InstanceTypeSet"];
            }
            if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
                $this->ChargeType = $param["ChargeType"];
            }
            if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
                $this->ProjectId = $param["ProjectId"];
            }
            if (array_key_exists("SystemDiskType",$param) and $param["SystemDiskType"] !== null) {
                $this->SystemDiskType = $param["SystemDiskType"];
            }
            if (array_key_exists("SystemDiskSize",$param) and $param["SystemDiskSize"] !== null) {
                $this->SystemDiskSize = $param["SystemDiskSize"];
            }
            if (array_key_exists("AddressBandWidth",$param) and $param["AddressBandWidth"] !== null) {
                $this->AddressBandWidth = $param["AddressBandWidth"];
            }
            if (array_key_exists("BandWidthShareId",$param) and $param["BandWidthShareId"] !== null) {
                $this->BandWidthShareId = $param["BandWidthShareId"];
            }
            if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
                $this->LineId = $param["LineId"];
            }
            if (array_key_exists("AddressProjectId",$param) and $param["AddressProjectId"] !== null) {
                $this->AddressProjectId = $param["AddressProjectId"];
            }
            if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
                $this->InstanceName = $param["InstanceName"];
            }
            if (array_key_exists("InstanceNameSuffix",$param) and $param["InstanceNameSuffix"] !== null) {
                $this->InstanceNameSuffix = $param["InstanceNameSuffix"];
            }
            if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
                $this->TagSet = $param["TagSet"];
            }

        }
}