<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyInstanceDatabasePrivilegesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBInstanceIdentifier" => null,
        /**String**/
        "InstanceDatabaseName" => null,
    ];

    /**特殊参数类型:Filter**/
    public $InstanceDatabasePrivileges = [];

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
        if (array_key_exists("InstanceDatabaseName", $param) and $param["InstanceDatabaseName"] !== null) {
            if (is_bool($param["InstanceDatabaseName"])) {
                $this->RequestParams["InstanceDatabaseName"] = $param["InstanceDatabaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDatabaseName"] = $param["InstanceDatabaseName"];
            }
        }
        if (array_key_exists("InstanceDatabasePrivileges", $param) and $param["InstanceDatabasePrivileges"] !== null) {
            $res = $this->formatFilterParams("InstanceDatabasePrivileges", $param["InstanceDatabasePrivileges"]);
            $this->_unserialize("InstanceDatabasePrivileges", $res);
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