<?php

namespace Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class ListTagKeysResponse extends BaseModel
{
    /**String 标签键**/
    public $TagKeys;

    /** 页码**/
    public $Page;

    /** 分页数**/
    public $PageSize;

    /** 总数**/
    public $Total;

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
        if (array_key_exists("TagKeys", $param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }
        if (array_key_exists("Page", $param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
        if (array_key_exists("PageSize", $param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
        if (array_key_exists("Total", $param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}