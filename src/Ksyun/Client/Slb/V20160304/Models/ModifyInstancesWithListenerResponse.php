<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyInstancesWithListenerResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 后端服务器的ID**/
         public  $RegisterId;

         /** 真实服务器的状态，健康，不健康，检查未完成，检查未开启**/
         public  $RealServerState;

         /** 后端服务器的类型**/
         public  $RealServerType;

         /** 监听器的ID**/
         public  $ListenerId;

         /** 实例的权重**/
         public  $Weight;

         /** 真实服务的IP**/
         public  $RealServerIp;

         /** 后端服务的端口**/
         public  $RealServerPort;

         /** 标签**/
         public  $Tag;

         /** RealServer的主备类型，仅MasterSlave监听器有此参数**/
         public  $MasterSlaveType;

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
            if (array_key_exists("RegisterId",$param) and $param["RegisterId"] !== null) {
                $this->RegisterId = $param["RegisterId"];
            }
            if (array_key_exists("RealServerState",$param) and $param["RealServerState"] !== null) {
                $this->RealServerState = $param["RealServerState"];
            }
            if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
                $this->RealServerType = $param["RealServerType"];
            }
            if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
                $this->ListenerId = $param["ListenerId"];
            }
            if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
                $this->Weight = $param["Weight"];
            }
            if (array_key_exists("RealServerIp",$param) and $param["RealServerIp"] !== null) {
                $this->RealServerIp = $param["RealServerIp"];
            }
            if (array_key_exists("RealServerPort",$param) and $param["RealServerPort"] !== null) {
                $this->RealServerPort = $param["RealServerPort"];
            }
            if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
                $this->Tag = $param["Tag"];
            }
            if (array_key_exists("MasterSlaveType",$param) and $param["MasterSlaveType"] !== null) {
                $this->MasterSlaveType = $param["MasterSlaveType"];
            }

        }
}