<?php

namespace Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class DescribeInstanceTokenResponse extends BaseModel
{
    /** 请求Id**/
    public $RequestId;

    /** 访问凭证数量
     **/
    public $TotalCount;

    /** 分页标识，如果调用未返回全部实例，标记下次调用的返回值的起点，如果已返回全部实例，则其值为0
     **/
    public $Marker;

    /** 单次调用返回的最大数**/
    public $MaxResults;

    /**Object 响应实体类**/
    public $TokenSet;

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
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }
        if (array_key_exists("MaxResults", $param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
        if (array_key_exists("TokenSet", $param) and $param["TokenSet"] !== null) {
            $this->TokenSet = $param["TokenSet"];
        }

    }
}