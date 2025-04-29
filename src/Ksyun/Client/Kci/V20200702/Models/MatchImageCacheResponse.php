<?php

namespace Ksyun\Client\Kci\V20200702\Models;

use Ksyun\Common\BaseModel;

class MatchImageCacheResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /**Object 镜像缓存匹配结果记录，只返回最优的一条记录**/
    public $ImageCaches;

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
        if (array_key_exists("ImageCaches", $param) and $param["ImageCaches"] !== null) {
            $this->ImageCaches = $param["ImageCaches"];
        }

    }
}