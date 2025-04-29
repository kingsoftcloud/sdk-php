<?php

namespace Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDBParameterGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "DBParameterGroupName" => null,
        /**String**/
        "Engine" => null,
        /**String**/
        "EngineVersion" => null,
        /**String**/
        "Description" => null,
    ];

    /**特殊参数类型:Filter**/
    public $Parameters.Name = [];
      /**特殊参数类型:Filter**/
    public $Parameters.Value = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DBParameterGroupName", $param) and $param["DBParameterGroupName"] !== null) {
            if (is_bool($param["DBParameterGroupName"])) {
                $this->RequestParams["DBParameterGroupName"] = $param["DBParameterGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["DBParameterGroupName"] = $param["DBParameterGroupName"];
            }
        }
        if (array_key_exists("Engine", $param) and $param["Engine"] !== null) {
            if (is_bool($param["Engine"])) {
                $this->RequestParams["Engine"] = $param["Engine"] ? "true" : "false";
            } else {
                $this->RequestParams["Engine"] = $param["Engine"];
            }
        }
        if (array_key_exists("EngineVersion", $param) and $param["EngineVersion"] !== null) {
            if (is_bool($param["EngineVersion"])) {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["EngineVersion"] = $param["EngineVersion"];
            }
        }
        if (array_key_exists("Parameters.Name", $param) and $param["Parameters.Name"] !== null) {
            $res = $this->formatFilterParams("Parameters.Name", $param["Parameters.Name"]);
            $this->_unserialize("Parameters.Name", $res);
        }
        if (array_key_exists("Parameters.Value", $param) and $param["Parameters.Value"] !== null) {
            $res = $this->formatFilterParams("Parameters.Value", $param["Parameters.Value"]);
            $this->_unserialize("Parameters.Value", $res);
        }
        if (array_key_exists("Description", $param) and $param["Description"] !== null) {
            if (is_bool($param["Description"])) {
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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