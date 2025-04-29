<?php

namespace Ksyun\Client\Kes\V20201215\Models;

use Ksyun\Common\BaseModel;

class DescribeClusterResponse extends BaseModel
{
    /** 集群ID**/
    public $ClusterId;

    /** 集群名称**/
    public $ClusterName;

    /** KES服务**/
    public $ClusterType;

    /** 产品版本**/
    public $MainVersion;

    /**Object 该集群下节点组列表**/
    public $InstanceGroups;

    /** 是否绑定 EIP**/
    public $EnableEip;

    /** 数据中心**/
    public $Region;

    /** 可用区**/
    public $AvailabilityZone;

    /** VPC网络ID**/
    public $VpcDomainId;

    /** 子网ID**/
    public $VpcSubnetId;

    /** 计费方式**/
    public $ChargeType;

    /** 集群状态**/
    public $ClusterStatus;

    /** 集群创建时间**/
    public $CreateTime;

    /** 集群更新时间**/
    public $UpdateTime;

    /** 集群运行时间**/
    public $ServingMinutes;

    /** 代理端口**/
    public $ProxyPort;

    /**Object 集群标签**/
    public $Tags;

    /** 请求ID**/
    public $RequestId;

    /** 状态码**/
    public $StatusCode;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
        if (array_key_exists("ClusterName", $param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
        if (array_key_exists("ClusterType", $param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
        if (array_key_exists("MainVersion", $param) and $param["MainVersion"] !== null) {
            $this->MainVersion = $param["MainVersion"];
        }
        if (array_key_exists("InstanceGroups", $param) and $param["InstanceGroups"] !== null) {
            $this->InstanceGroups = $param["InstanceGroups"];
        }
        if (array_key_exists("EnableEip", $param) and $param["EnableEip"] !== null) {
            $this->EnableEip = $param["EnableEip"];
        }
        if (array_key_exists("Region", $param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
        if (array_key_exists("AvailabilityZone", $param) and $param["AvailabilityZone"] !== null) {
            $this->AvailabilityZone = $param["AvailabilityZone"];
        }
        if (array_key_exists("VpcDomainId", $param) and $param["VpcDomainId"] !== null) {
            $this->VpcDomainId = $param["VpcDomainId"];
        }
        if (array_key_exists("VpcSubnetId", $param) and $param["VpcSubnetId"] !== null) {
            $this->VpcSubnetId = $param["VpcSubnetId"];
        }
        if (array_key_exists("ChargeType", $param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }
        if (array_key_exists("ClusterStatus", $param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }
        if (array_key_exists("CreateTime", $param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
        if (array_key_exists("UpdateTime", $param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
        if (array_key_exists("ServingMinutes", $param) and $param["ServingMinutes"] !== null) {
            $this->ServingMinutes = $param["ServingMinutes"];
        }
        if (array_key_exists("ProxyPort", $param) and $param["ProxyPort"] !== null) {
            $this->ProxyPort = $param["ProxyPort"];
        }
        if (array_key_exists("Tags", $param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}