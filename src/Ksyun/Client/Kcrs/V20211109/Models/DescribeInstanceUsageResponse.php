<?php

namespace Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceUsageResponse extends BaseModel
{
    /** 请求Id**/
    public $RequestId;

    /** 命名空间配额数量**/
    public $NamespaceQuota;

    /** 已创建的命名空间数量    **/
    public $NamespaceUsage;

    /** 镜像仓库配额数量    **/
    public $RepoQuota;

    /** 已创建的镜像仓库数量    **/
    public $RepoUsage;

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
        if (array_key_exists("NamespaceQuota", $param) and $param["NamespaceQuota"] !== null) {
            $this->NamespaceQuota = $param["NamespaceQuota"];
        }
        if (array_key_exists("NamespaceUsage", $param) and $param["NamespaceUsage"] !== null) {
            $this->NamespaceUsage = $param["NamespaceUsage"];
        }
        if (array_key_exists("RepoQuota", $param) and $param["RepoQuota"] !== null) {
            $this->RepoQuota = $param["RepoQuota"];
        }
        if (array_key_exists("RepoUsage", $param) and $param["RepoUsage"] !== null) {
            $this->RepoUsage = $param["RepoUsage"];
        }

    }
}