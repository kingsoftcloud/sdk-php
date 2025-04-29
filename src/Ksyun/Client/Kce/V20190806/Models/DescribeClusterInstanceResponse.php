<?php

namespace Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;

class DescribeClusterInstanceResponse extends BaseModel
{
    /**Object **/
    public $InstanceSet;

    /** 请求id**/
    public $RequestId;

    /** 单页调用返回的最大实例数。**/
    public $MaxResults;

    /** 分页标识，如果调用未返回全部实例，标记下次调用的返回值的起点，如果已返回全部实例，则其值为0。**/
    public $Marker;

    /** 集群内节点实例个数（包括master和worker节点）。**/
    public $TotalCount;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceSet", $param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = $param["InstanceSet"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("MaxResults", $param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

    }
}