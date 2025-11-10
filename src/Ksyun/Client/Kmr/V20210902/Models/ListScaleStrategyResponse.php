<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class ListScaleStrategyResponse extends BaseModel
{
         /** 请求ID**/
         public  $RequestId;

         /** 集群ID**/
         public  $Id;

         /** 集群名称**/
         public  $Name;

         /** 策略类型：

- Time-Based：时间弹性
- Load-Based：负载弹性**/
         public  $StrategyModule;

         /**Object 基于时间的弹性伸缩策略**/
         public  $Strategies;

         /** 存在时间冲突的弹性伸缩策略

**/
         public  $ConflictStrategies;

         /**Object 基于负载的弹性伸缩策略

**/
         public  $LoadBasedStrategies;

         /** 状态码

**/
         public  $StatusCode;

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
            if (array_key_exists("Id",$param) and $param["Id"] !== null) {
                $this->Id = $param["Id"];
            }
            if (array_key_exists("Name",$param) and $param["Name"] !== null) {
                $this->Name = $param["Name"];
            }
            if (array_key_exists("StrategyModule",$param) and $param["StrategyModule"] !== null) {
                $this->StrategyModule = $param["StrategyModule"];
            }
            if (array_key_exists("Strategies",$param) and $param["Strategies"] !== null) {
                $this->Strategies = $param["Strategies"];
            }
            if (array_key_exists("ConflictStrategies",$param) and $param["ConflictStrategies"] !== null) {
                $this->ConflictStrategies = $param["ConflictStrategies"];
            }
            if (array_key_exists("LoadBasedStrategies",$param) and $param["LoadBasedStrategies"] !== null) {
                $this->LoadBasedStrategies = $param["LoadBasedStrategies"];
            }
            if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
                $this->StatusCode = $param["StatusCode"];
            }

        }
}