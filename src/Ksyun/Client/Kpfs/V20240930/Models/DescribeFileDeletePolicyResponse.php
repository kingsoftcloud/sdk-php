<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;

class DescribeFileDeletePolicyResponse extends BaseModel
{
         /** 文件系统的实例ID**/
         public  $FileSystemId;

         /** 文件系统的实例名称**/
         public  $FileSystemName;

         /** 文件删除策略ID**/
         public  $FileDeletePolicyId;

         /** 文件删除策略名称：允许字符长度:1-63
允许包含一下字符:数字 字母 + = . @ _ -
不能以 . 字符开头**/
         public  $FileDeletePolicyName;

         /** 目录绝对路径**/
         public  $DirPath;

         /** 执行类型
有效值：
• 周期执行：CycleExecution
• 立即执行：ImmediateExecution
• 默认：CycleExecution**/
         public  $ExecutionType;

         /** 文件删除策略执行频率。
有效值：
• day：按天
• week：按周
• month：按月**/
         public  $FrequencyUnit;

         /**Int 文件删除策略执行日期**/
         public  $IndexOfFrequency;

         /**Object 文件删除策略定期执行时间点，只支持小时（整点）**/
         public  $FrequencyTimePoints;

         /** 文件大小过滤规则**/
         public  $FileSizeRule;

         /**Object 时间参数**/
         public  $TimeRuleParameters;

         /** 删除策略状态值**/
         public  $DeletePolicyStatus;

         /** 创建删除策略时间**/
         public  $CreateTime;

         /** 文件删除策略备注信息
（限制）:允许字符长度:0-63，允许包含以下字符:数字 字母 中文 + = . @ _ -
**/
         public  $Description;

         /** 文件名过滤规则
格式要求:
• 允许字符长度：0-31 
• 以，分隔
• 支持？和*通配符
• 默认为全部**/
         public  $FileNameRule;

         public function __construct()
         {

         }

        public function unserialize($param)
        {
            if ($param === null) {
                return;
            }
            if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
                $this->FileSystemId = $param["FileSystemId"];
            }
            if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
                $this->FileSystemName = $param["FileSystemName"];
            }
            if (array_key_exists("FileDeletePolicyId",$param) and $param["FileDeletePolicyId"] !== null) {
                $this->FileDeletePolicyId = $param["FileDeletePolicyId"];
            }
            if (array_key_exists("FileDeletePolicyName",$param) and $param["FileDeletePolicyName"] !== null) {
                $this->FileDeletePolicyName = $param["FileDeletePolicyName"];
            }
            if (array_key_exists("DirPath",$param) and $param["DirPath"] !== null) {
                $this->DirPath = $param["DirPath"];
            }
            if (array_key_exists("ExecutionType",$param) and $param["ExecutionType"] !== null) {
                $this->ExecutionType = $param["ExecutionType"];
            }
            if (array_key_exists("FrequencyUnit",$param) and $param["FrequencyUnit"] !== null) {
                $this->FrequencyUnit = $param["FrequencyUnit"];
            }
            if (array_key_exists("IndexOfFrequency",$param) and $param["IndexOfFrequency"] !== null) {
                $this->IndexOfFrequency = $param["IndexOfFrequency"];
            }
            if (array_key_exists("FrequencyTimePoints",$param) and $param["FrequencyTimePoints"] !== null) {
                $this->FrequencyTimePoints = $param["FrequencyTimePoints"];
            }
            if (array_key_exists("FileSizeRule",$param) and $param["FileSizeRule"] !== null) {
                $this->FileSizeRule = $param["FileSizeRule"];
            }
            if (array_key_exists("TimeRuleParameters",$param) and $param["TimeRuleParameters"] !== null) {
                $this->TimeRuleParameters = $param["TimeRuleParameters"];
            }
            if (array_key_exists("DeletePolicyStatus",$param) and $param["DeletePolicyStatus"] !== null) {
                $this->DeletePolicyStatus = $param["DeletePolicyStatus"];
            }
            if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
                $this->CreateTime = $param["CreateTime"];
            }
            if (array_key_exists("Description",$param) and $param["Description"] !== null) {
                $this->Description = $param["Description"];
            }
            if (array_key_exists("FileNameRule",$param) and $param["FileNameRule"] !== null) {
                $this->FileNameRule = $param["FileNameRule"];
            }

        }
}