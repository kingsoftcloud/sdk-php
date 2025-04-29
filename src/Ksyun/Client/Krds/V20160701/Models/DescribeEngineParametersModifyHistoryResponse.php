<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class DescribeEngineParametersModifyHistoryResponse extends BaseModel
{
    /** 当前查询条件下总条数
     * 查询总条数**/
    public $total_count;

    /** 请求ID
     * 请求标识**/
    public $request_id;

    /**Object 查询记录
     * 查询记录**/
    public $history;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("total_count", $param) and $param["total_count"] !== null) {
            $this->total_count = $param["total_count"];
        }
        if (array_key_exists("request_id", $param) and $param["request_id"] !== null) {
            $this->request_id = $param["request_id"];
        }
        if (array_key_exists("history", $param) and $param["history"] !== null) {
            $this->history = $param["history"];
        }

    }
}