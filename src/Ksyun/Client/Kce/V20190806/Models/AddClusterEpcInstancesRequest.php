<?php

namespace Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddClusterEpcInstancesRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "ClusterId" => null,
        /**Object**/
        "AdvancedSetting" => null,
    ];

    /**特殊参数类型:Filter**/
    public $InstanceId = [];
    /**特殊参数类型:Filter**/
    public $EpcPara = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClusterId", $param) and $param["ClusterId"] !== null) {
            if (is_bool($param["ClusterId"])) {
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            $res = $this->formatFilterParams("InstanceId", $param["InstanceId"]);
            $this->_unserialize("InstanceId", $res);
        }
        if (array_key_exists("EpcPara", $param) and $param["EpcPara"] !== null) {
            $res = $this->formatFilterParams("EpcPara", $param["EpcPara"]);
            $this->_unserialize("EpcPara", $res);
        }
        if (array_key_exists("AdvancedSetting", $param) and $param["AdvancedSetting"] !== null) {
            if (is_bool($param["AdvancedSetting"])) {
                $this->RequestParams["AdvancedSetting"] = $param["AdvancedSetting"] ? "true" : "false";
            } else {
                $this->RequestParams["AdvancedSetting"] = $param["AdvancedSetting"];
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