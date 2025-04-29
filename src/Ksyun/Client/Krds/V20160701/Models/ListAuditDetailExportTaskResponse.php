<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class ListAuditDetailExportTaskResponse extends BaseModel
{
    /**Object 结果导出列表
     **/
    public $taskResps;

    /** 结果导出列表总条数
     **/
    public $totalCount;

    /** 请求ID
     * –**/
    public $RequestId;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("taskResps", $param) and $param["taskResps"] !== null) {
            $this->taskResps = $param["taskResps"];
        }
        if (array_key_exists("totalCount", $param) and $param["totalCount"] !== null) {
            $this->totalCount = $param["totalCount"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}