<?php

namespace Ksyun\Client\Monitor\V20250101\Models;

use Ksyun\Common\BaseModel;

class DescribeAlertingResourcesResponse extends BaseModel
{
    /** **/
    public $ResponseMetadata;

    /**Object **/
    public $AlertingProductSet;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ResponseMetadata", $param) and $param["ResponseMetadata"] !== null) {
            $this->ResponseMetadata = $param["ResponseMetadata"];
        }
        if (array_key_exists("AlertingProductSet", $param) and $param["AlertingProductSet"] !== null) {
            $this->AlertingProductSet = $param["AlertingProductSet"];
        }

    }
}