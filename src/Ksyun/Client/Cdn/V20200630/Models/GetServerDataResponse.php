<?php

namespace Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;

class GetServerDataResponse extends BaseModel
{
    /** **/
    public $StartTime;

    /** **/
    public $EndTime;

    /** **/
    public $Metric;

    /** **/
    public $DataType;

    /** **/
    public $Interval;

    /** **/
    public $CdnType;

    /** **/
    public $Domains;

    /** **/
    public $Regions;

    /** **/
    public $Schema;

    /** **/
    public $ResultType;

    /**Object **/
    public $Datas;

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
        if (array_key_exists("StartTime", $param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }
        if (array_key_exists("EndTime", $param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
        if (array_key_exists("Metric", $param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }
        if (array_key_exists("DataType", $param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
        if (array_key_exists("Interval", $param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
        if (array_key_exists("CdnType", $param) and $param["CdnType"] !== null) {
            $this->CdnType = $param["CdnType"];
        }
        if (array_key_exists("Domains", $param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
        if (array_key_exists("Regions", $param) and $param["Regions"] !== null) {
            $this->Regions = $param["Regions"];
        }
        if (array_key_exists("Schema", $param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }
        if (array_key_exists("ResultType", $param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }
        if (array_key_exists("Datas", $param) and $param["Datas"] !== null) {
            $this->Datas = $param["Datas"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}