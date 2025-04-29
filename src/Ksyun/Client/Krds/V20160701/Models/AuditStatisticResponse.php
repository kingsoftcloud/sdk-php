<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;

class AuditStatisticResponse extends BaseModel
{
    /** **/
    public $AuditStatistic;

    public function __construct()
    {

    }

    public function unserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AuditStatistic", $param) and $param["AuditStatistic"] !== null) {
            $this->AuditStatistic = $param["AuditStatistic"];
        }

    }
}