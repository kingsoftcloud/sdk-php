<?php

namespace Ksyun\Client\Kce\V20230101\Models;

use Ksyun\Common\BaseModel;

class DescribeNetworkResponse extends BaseModel
{
    /** 集群ID**/
    public $ClusterId;

    /** 网络ID**/
    public $NetworkId;

    /** 公网SLB状态**/
    public $PublicSLB;

    /** 内网SLB状态**/
    public $PrivateSLB;

    /** 私链状态**/
    public $PrivateLink;

    /** EIP 状态**/
    public $EIP;

    /** 是否开启公网访问**/
    public $PublicAccess;

    /** 创建时间**/
    public $CreatedTime;

    /** 更新时间**/
    public $UpdatedTime;

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
        if (array_key_exists("NetworkId", $param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }
        if (array_key_exists("PublicSLB", $param) and $param["PublicSLB"] !== null) {
            $this->PublicSLB = $param["PublicSLB"];
        }
        if (array_key_exists("PrivateSLB", $param) and $param["PrivateSLB"] !== null) {
            $this->PrivateSLB = $param["PrivateSLB"];
        }
        if (array_key_exists("PrivateLink", $param) and $param["PrivateLink"] !== null) {
            $this->PrivateLink = $param["PrivateLink"];
        }
        if (array_key_exists("EIP", $param) and $param["EIP"] !== null) {
            $this->EIP = $param["EIP"];
        }
        if (array_key_exists("PublicAccess", $param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }
        if (array_key_exists("CreatedTime", $param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
        if (array_key_exists("UpdatedTime", $param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

    }
}