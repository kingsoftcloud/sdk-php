<?php

namespace Ksyun\Client\Cdn\V20160901\Models;

use Ksyun\Common\BaseModel;

class GetDomainPidDimensionUsageDataResponse extends BaseModel
{
    /** **/
    public $StartTime;

    /** **/
    public $EndTime;

    /** **/
    public $CdnType;

    /** **/
    public $Domains;

    /** **/
    public $Areas;

    /** **/
    public $Interval;

    /**Object **/
    public $Metric;

    /** **/
    public $RequestId;

    /** **/
    public $PeakTime;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("StartTime", $param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
        if (array_key_exists("EndTime", $param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
        if (array_key_exists("CdnType", $param) and $param["CdnType"] !== null) {
            $this->CdnType = $param["CdnType"];
        }
        if (array_key_exists("Domains", $param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
        if (array_key_exists("Areas", $param) and $param["Areas"] !== null) {
            $this->Areas = $param["Areas"];
        }
        if (array_key_exists("Interval", $param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
        if (array_key_exists("Metric", $param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("PeakTime", $param) and $param["PeakTime"] !== null) {
            $this->PeakTime = $param["PeakTime"];
        }

    }
}