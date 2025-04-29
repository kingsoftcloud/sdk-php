<?php

namespace Ksyun\Client\Cdn\V20200630\Models;

use Ksyun\Common\BaseModel;

class GetTopReferDataResponse extends BaseModel
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
    public $LimitN;

    /** **/
    public $SortBy;

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
        if (array_key_exists("CdnType", $param) and $param["CdnType"] !== null) {
            $this->CdnType = $param["CdnType"];
        }
        if (array_key_exists("Domains", $param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
        if (array_key_exists("LimitN", $param) and $param["LimitN"] !== null) {
            $this->LimitN = $param["LimitN"];
        }
        if (array_key_exists("SortBy", $param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }
        if (array_key_exists("Datas", $param) and $param["Datas"] !== null) {
            $this->Datas = $param["Datas"];
        }
        if (array_key_exists("RequestId", $param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

    }
}