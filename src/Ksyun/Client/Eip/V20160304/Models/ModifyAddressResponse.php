<?php
namespace  Ksyun\Client\Eip\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyAddressResponse extends BaseModel
{
         /** 线路ID**/
         public  $LineId;

         /** 弹性IP的带宽**/
         public  $BandWidth;

         /** 创建时间**/
         public  $CreateTime;

         /** 弹性IP的状态，已绑定(associate)，未绑定(disassociate)**/
         public  $State;

         /** 弹性IP的ID**/
         public  $AllocationId;

         /** IP地址**/
         public  $PublicIp;

         /** 请求ID**/
         public  $RequestId;

         /** 绑定类型**/
         public  $InstanceType;

         /** 绑定实例ID**/
         public  $InstanceId;

         /** IP版本**/
         public  $IpVersion;

         /** 网卡ID**/
         public  $NetworkInterfaceId;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
                $this->LineId = $param["LineId"];
            }
            if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
                $this->BandWidth = $param["BandWidth"];
            }
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }
            if (array_key_exists("State",$param) and $param["State"] !== null) {
                $this->State = $param["State"];
            }
            if (array_key_exists("AllocationId",$param) and $param["AllocationId"] !== null) {
                $this->AllocationId = $param["AllocationId"];
            }
            if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
                $this->PublicIp = $param["PublicIp"];
            }
            if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
                $this->RequestId = $param["RequestId"];
            }
            if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
                $this->InstanceType = $param["InstanceType"];
            }
            if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
                $this->InstanceId = $param["InstanceId"];
            }
            if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
                $this->IpVersion = $param["IpVersion"];
            }
            if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
                $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
            }

        }
}