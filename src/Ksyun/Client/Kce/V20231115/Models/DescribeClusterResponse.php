<?php

namespace Ksyun\Client\Kce\V20231115\Models;

use Ksyun\Common\BaseModel;

class DescribeClusterResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 集群总数量**/
    public $TotalCount;

    /** 单次调用返回的最大记录数**/
    public $MaxResults;

    /** 分页标识，如果调用未返回全部实例，标记下次调用的返回值的起点，如果已返回全部实例，则其值为0**/
    public $Marker;

    /**Object **/
    public $ClusterSet;

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
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
        if (array_key_exists("MaxResults", $param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }
        if (array_key_exists("ClusterSet", $param) and $param["ClusterSet"] !== null) {
            $this->ClusterSet = $param["ClusterSet"];
        }

    }
}