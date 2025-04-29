<?php

namespace Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeallocateSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "AvailableZone" => null,
        /**String**/
        "SecurityGroupId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $CacheId = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AvailableZone", $param) and $param["AvailableZone"] !== null) {
            if (is_bool($param["AvailableZone"])) {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"];
            }
        }
        if (array_key_exists("CacheId", $param) and $param["CacheId"] !== null) {
            $res = $this->formatFilterParams("CacheId", $param["CacheId"]);
            $this->_unserialize("CacheId", $res);
        }
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            if (is_bool($param["SecurityGroupId"])) {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
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