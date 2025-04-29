<?php

namespace Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;

class GetRealTimeHitRateDataResponse extends BaseModel
{
    /** **/
    public $StartTime;

    /** **/
    public $EndTime;

    /** **/
    public $HitRatetype;

    /** **/
    public $CdnType;

    /** **/
    public $Domains;

    /** **/
    public $ResultType;

    /** **/
    public $RequestId;

    /**Object **/
    public $Datas;

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
        if (array_key_exists("HitRatetype", $param) and $param["HitRatetype"] !== null) {
            $this->HitRatetype = $param["HitRatetype"];
        }
        if (array_key_exists("CdnType", $param) and $param["CdnType"] !== null) {
            $this->CdnType = $param["CdnType"];
        }
        if (array_key_exists("Domains", $param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
        if (array_key_exists("ResultType", $param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
        if (array_key_exists("Datas", $param) and $param["Datas"] !== null) {
            $this->Datas = $param["Datas"];
        }

    }
}