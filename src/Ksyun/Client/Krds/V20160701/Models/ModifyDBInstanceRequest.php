<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDBInstanceRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBInstanceIdentifier" => null,
        /**String**/
        "PreferredBackupTime" => null,
        /**String**/
        "DBInstanceName" => null,
        /**String**/
        "DBParameterGroupId" => null,
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
        if (array_key_exists("PreferredBackupTime", $param) and $param["PreferredBackupTime"] !== null) {
            if (is_bool($param["PreferredBackupTime"])) {
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PreferredBackupTime"] = $param["PreferredBackupTime"];
            }
        }
        if (array_key_exists("DBInstanceName", $param) and $param["DBInstanceName"] !== null) {
            if (is_bool($param["DBInstanceName"])) {
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceName"] = $param["DBInstanceName"];
            }
        }
        if (array_key_exists("DBParameterGroupId", $param) and $param["DBParameterGroupId"] !== null) {
            if (is_bool($param["DBParameterGroupId"])) {
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["DBParameterGroupId"] = $param["DBParameterGroupId"];
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