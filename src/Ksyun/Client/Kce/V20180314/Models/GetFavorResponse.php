<?php

namespace Ksyun\Client\Kce\V20180314\Models;

use Ksyun\Common\BaseModel;

class GetFavorResponse extends BaseModel
{
    /** 请求id**/
    public $RequestId;

    /** 分页标识，如果调用未返回全部实例，标记下次调用的返回值的起点，如果已返回全部实例，则其值为0。**/
    public $Marker;

    /** 单词调用返回的最大实例数**/
    public $MaxResults;

    /** 返回的镜像收藏数目**/
    public $TotalCount;

    /**Object 镜像收藏的信息**/
    public $FavorSet;

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
        if (array_key_exists("Marker", $param) and $param["Marker"] !== null) {
            $this->Marker = $param["Marker"];
        }
        if (array_key_exists("MaxResults", $param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
        if (array_key_exists("TotalCount", $param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
        if (array_key_exists("FavorSet", $param) and $param["FavorSet"] !== null) {
            $this->FavorSet = $param["FavorSet"];
        }

    }
}