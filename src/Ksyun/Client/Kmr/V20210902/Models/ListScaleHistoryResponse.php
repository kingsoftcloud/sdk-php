<?php

namespace Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;

class ListScaleHistoryResponse extends BaseModel
{
    /** 请求ID**/
    public $RequestId;

    /** 集群ID**/
    public $ClusterId;

    /**Object 策略的执行历史
     **/
    public $ScaleHistories;

    /** 总数**/
    public $Total;

    /** 状态码
     **/
    public $StatusCode;

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
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
        if (array_key_exists("ScaleHistories", $param) and $param["ScaleHistories"] !== null) {
            $this->ScaleHistories = $param["ScaleHistories"];
        }
        if (array_key_exists("Total", $param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
        if (array_key_exists("StatusCode", $param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

    }
}