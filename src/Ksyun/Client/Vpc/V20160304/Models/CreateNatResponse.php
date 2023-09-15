<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateNatResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 创建时间**/
         public  $CreateTime;

         /** Vpc的ID**/
         public  $VpcId;

         /** Nat的ID**/
         public  $NatId;

         /** Nat的名称**/
         public  $NatName;

         /** Nat的作用范围，VPC(Vpc)是指NAT对整个VPC有效，子网(subnet)是指NAT对关联的子网有效**/
         public  $NatMode;

         /** Nat的类型**/
         public  $NatType;

         /** Nat的IP数量**/
         public  $NatIpNumber;

         /** Nat的带宽**/
         public  $BandWidth;

         /** 项目的ID**/
         public  $ProjectId;

         /** Nat的计费类型**/
         public  $ChargeType;

         /**Object Nat Ip的信息**/
         public  $NatIpSet;

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
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }
            if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
                $this->VpcId = $param["VpcId"];
            }
            if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
                $this->NatId = $param["NatId"];
            }
            if (array_key_exists("NatName",$param) and $param["NatName"] !== null) {
                $this->NatName = $param["NatName"];
            }
            if (array_key_exists("NatMode",$param) and $param["NatMode"] !== null) {
                $this->NatMode = $param["NatMode"];
            }
            if (array_key_exists("NatType",$param) and $param["NatType"] !== null) {
                $this->NatType = $param["NatType"];
            }
            if (array_key_exists("NatIpNumber",$param) and $param["NatIpNumber"] !== null) {
                $this->NatIpNumber = $param["NatIpNumber"];
            }
            if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
                $this->BandWidth = $param["BandWidth"];
            }
            if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
                $this->ProjectId = $param["ProjectId"];
            }
            if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
                $this->ChargeType = $param["ChargeType"];
            }
            if (array_key_exists("NatIpSet",$param) and $param["NatIpSet"] !== null) {
                $this->NatIpSet = $param["NatIpSet"];
            }

        }
}