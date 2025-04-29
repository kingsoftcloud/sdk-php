<?php

namespace Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;

class GetRetentionPolicyLogsResponse extends BaseModel
{
    /** 请求Id**/
    public $RequestId;

    /** 响应实体类**/
    public $Data;

    /** **/
    public $Page;

    /** **/
    public $PageSize;

    /** **/
    public $Total;

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
        if (array_key_exists("Data", $param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
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

    }
}