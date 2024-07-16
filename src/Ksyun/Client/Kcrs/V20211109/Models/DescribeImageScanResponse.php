<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeImageScanResponse extends BaseModel
{
         /** 请求Id**/
         public  $RequestId;

         /** 镜像安全扫描状态
**/
         public  $Status;

         /** 镜像安全扫描结果数量
**/
         public  $TotalCount;

         /** 扫描完成时间**/
         public  $FinishTime;

         /** 安全漏洞等级数量**/
         public  $Summary;

         /** 镜像安全扫描结果详细信息
**/
         public  $VulnerabilitySet;

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
            if (array_key_exists("Status",$param) and $param["Status"] !== null) {
                $this->Status = $param["Status"];
            }
            if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
                $this->TotalCount = $param["TotalCount"];
            }
            if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
                $this->FinishTime = $param["FinishTime"];
            }
            if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
                $this->Summary = $param["Summary"];
            }
            if (array_key_exists("VulnerabilitySet",$param) and $param["VulnerabilitySet"] !== null) {
                $this->VulnerabilitySet = $param["VulnerabilitySet"];
            }

        }
}