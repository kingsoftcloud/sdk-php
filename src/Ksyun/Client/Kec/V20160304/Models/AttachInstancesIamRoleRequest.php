<?php

namespace Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AttachInstancesIamRoleRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "IamRoleName" => null,
    ];

    /**特殊参数类型:Filter**/
    public $InstanceId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId", $param) and $param["InstanceId"] !== null) {
            $res = $this->formatFilterParams("InstanceId", $param["InstanceId"]);
            $this->_unserialize("InstanceId", $res);
        }
        if (array_key_exists("IamRoleName", $param) and $param["IamRoleName"] !== null) {
            if (is_bool($param["IamRoleName"])) {
                $this->RequestParams["IamRoleName"] = $param["IamRoleName"] ? "true" : "false";
            } else {
                $this->RequestParams["IamRoleName"] = $param["IamRoleName"];
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