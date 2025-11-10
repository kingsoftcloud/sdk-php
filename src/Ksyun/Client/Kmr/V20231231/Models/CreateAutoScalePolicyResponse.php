<?php
namespace  Ksyun\Client\Kmr\V20231231\Models;

use Ksyun\Common\BaseModel;

class CreateAutoScalePolicyResponse extends BaseModel
{
         /** 实例ID，用于唯一标识一个实例**/
         public  $InstanceId;

         /** 策略名称**/
         public  $PolicyName;

         /** 计费类型，按量付费**/
         public  $ChargeType;

         /** 执行周期，每天执行**/
         public  $ExecuteCycle;

         /** **/
         public  $ExecuteRules;

         /** 节点类型**/
         public  $NodeType;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
                $this->InstanceId = $param["InstanceId"];
            }
            if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
                $this->PolicyName = $param["PolicyName"];
            }
            if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
                $this->ChargeType = $param["ChargeType"];
            }
            if (array_key_exists("ExecuteCycle",$param) and $param["ExecuteCycle"] !== null) {
                $this->ExecuteCycle = $param["ExecuteCycle"];
            }
            if (array_key_exists("ExecuteRules",$param) and $param["ExecuteRules"] !== null) {
                $this->ExecuteRules = $param["ExecuteRules"];
            }
            if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
                $this->NodeType = $param["NodeType"];
            }

        }
}