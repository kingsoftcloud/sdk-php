<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class SqlAuditReportResponse extends BaseModel
{
    /**Object **/
    public $data;

    /** 每页条数
     **/
    public $size;

    /** 总条数
     **/
    public $totalSize;

    /** 页码
     **/
    public $page;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("data", $param) and $param["data"] !== null) {
            $this->data = $param["data"];
        }
        if (array_key_exists("size", $param) and $param["size"] !== null) {
            $this->size = $param["size"];
        }
        if (array_key_exists("totalSize", $param) and $param["totalSize"] !== null) {
            $this->totalSize = $param["totalSize"];
        }
        if (array_key_exists("page", $param) and $param["page"] !== null) {
            $this->page = $param["page"];
        }

    }
}