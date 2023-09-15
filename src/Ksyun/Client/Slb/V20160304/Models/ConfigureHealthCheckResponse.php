<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ConfigureHealthCheckResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 健康检查保持的状态**/
         public  $HealthCheckState;

         /** 健康检查端口**/
         public  $HealthCheckConnectPort;

         /** 健康检查的ID**/
         public  $HealthCheckId;

         /** 健康阈值**/
         public  $HealthyThreshold;

         /** 健康检查时间间隔**/
         public  $Interval;

         /** 健康检查超时时间**/
         public  $Timeout;

         /** 不健康阈值**/
         public  $UnhealthyThreshold;

         /** HTTP类型监听器健康检查的链接**/
         public  $UrlPath;

         /** HTTP类型健康检查的域名**/
         public  $HostName;

         /** UDP监听健康检查的请求串**/
         public  $HealthCheckReq;

         /** UDP监听健康检查的响应串**/
         public  $HealthCheckExp;

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
            if (array_key_exists("HealthCheckState",$param) and $param["HealthCheckState"] !== null) {
                $this->HealthCheckState = $param["HealthCheckState"];
            }
            if (array_key_exists("HealthCheckConnectPort",$param) and $param["HealthCheckConnectPort"] !== null) {
                $this->HealthCheckConnectPort = $param["HealthCheckConnectPort"];
            }
            if (array_key_exists("HealthCheckId",$param) and $param["HealthCheckId"] !== null) {
                $this->HealthCheckId = $param["HealthCheckId"];
            }
            if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
                $this->HealthyThreshold = $param["HealthyThreshold"];
            }
            if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
                $this->Interval = $param["Interval"];
            }
            if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
                $this->Timeout = $param["Timeout"];
            }
            if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
                $this->UnhealthyThreshold = $param["UnhealthyThreshold"];
            }
            if (array_key_exists("UrlPath",$param) and $param["UrlPath"] !== null) {
                $this->UrlPath = $param["UrlPath"];
            }
            if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
                $this->HostName = $param["HostName"];
            }
            if (array_key_exists("HealthCheckReq",$param) and $param["HealthCheckReq"] !== null) {
                $this->HealthCheckReq = $param["HealthCheckReq"];
            }
            if (array_key_exists("HealthCheckExp",$param) and $param["HealthCheckExp"] !== null) {
                $this->HealthCheckExp = $param["HealthCheckExp"];
            }

        }
}