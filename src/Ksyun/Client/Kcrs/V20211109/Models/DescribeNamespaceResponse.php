<?php

namespace Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeNamespaceResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 每个分页的最大条目数**/
    public $MaxResults;

    /** 当前页码**/
    public $Marker;

    /** 条目总数**/
    public $TotalCount;

    /**Object **/
    public $NamespaceSet;

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
        if (array_key_exists("MaxResults", $param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
        if (array_key_exists("NamespaceSet", $param) and $param["NamespaceSet"] !== null) {
            $this->NamespaceSet = $param["NamespaceSet"];
        }

    }
}