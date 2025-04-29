<?php

namespace Ksyun\Client\Monitor\V20100525\Models;

use Ksyun\Common\BaseModel;

class GetMetricStatisticsResponse extends BaseModel
{
    /** **/
    public $getMetricStatisticsResult;

    /** **/
    public $responseMetadata;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("getMetricStatisticsResult", $param) and $param["getMetricStatisticsResult"] !== null) {
            $this->getMetricStatisticsResult = $param["getMetricStatisticsResult"];
        }
        if (array_key_exists("responseMetadata", $param) and $param["responseMetadata"] !== null) {
            $this->responseMetadata = $param["responseMetadata"];
        }

    }
}