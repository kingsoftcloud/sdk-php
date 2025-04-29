<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class ListSlowLogDetailExportTaskResponse extends BaseModel
{
    /**Object **/
    public $taskResps;

    /** **/
    public $totalCount;

    /** **/
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