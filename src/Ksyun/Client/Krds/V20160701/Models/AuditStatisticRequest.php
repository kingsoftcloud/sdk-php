<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AuditStatisticRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBInstanceIdentifier" => null,
        /**String**/
        "AuditStatisticBeginTime" => null,
        /**String**/
        "AuditStatisticEndTime" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBInstanceIdentifier", $param) and $param["DBInstanceIdentifier"] !== null) {
            if (is_bool($param["DBInstanceIdentifier"])) {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("AuditStatisticBeginTime", $param) and $param["AuditStatisticBeginTime"] !== null) {
            if (is_bool($param["AuditStatisticBeginTime"])) {
                $this->RequestParams["AuditStatisticBeginTime"] = $param["AuditStatisticBeginTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AuditStatisticBeginTime"] = $param["AuditStatisticBeginTime"];
            }
        }
        if (array_key_exists("AuditStatisticEndTime", $param) and $param["AuditStatisticEndTime"] !== null) {
            if (is_bool($param["AuditStatisticEndTime"])) {
                $this->RequestParams["AuditStatisticEndTime"] = $param["AuditStatisticEndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AuditStatisticEndTime"] = $param["AuditStatisticEndTime"];
            }
        }

    }

    private function _unserialize($name, $params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value) {
            $this->$name[$key] = $value;
        }

    }
}