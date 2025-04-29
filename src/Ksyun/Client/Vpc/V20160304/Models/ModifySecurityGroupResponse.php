<?php

namespace Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifySecurityGroupResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 创建时间**/
    public $CreateTime;

    /** Vpc的ID**/
    public $VpcId;

    /** 安全组的名称**/
    public $SecurityGroupName;

    /** 安全组的ID**/
    public $SecurityGroupId;

    /** 安全组的描述**/
    public $Description;

    /** 安全组的类型**/
    public $SecurityGroupType;

    /**Object 安全组规则的信息**/
    public $SecurityGroupEntrySet;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("CreateTime", $param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
        if (array_key_exists("VpcId", $param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
        if (array_key_exists("SecurityGroupName", $param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
        if (array_key_exists("SecurityGroupType", $param) and $param["SecurityGroupType"] !== null) {
            $this->SecurityGroupType = $param["SecurityGroupType"];
        }
        if (array_key_exists("SecurityGroupEntrySet", $param) and $param["SecurityGroupEntrySet"] !== null) {
            $this->SecurityGroupEntrySet = $param["SecurityGroupEntrySet"];
        }

    }
}