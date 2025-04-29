<?php

namespace Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SecurityGroupRelationRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "RelationAction" => null,
        /**String**/
        "SecurityGroupId" => null,
    ];

    /**特殊参数类型:Filter**/
    public $DBInstanceIdentifier = [];

    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RelationAction", $param) and $param["RelationAction"] !== null) {
            if (is_bool($param["RelationAction"])) {
                $this->RequestParams["RelationAction"] = $param["RelationAction"] ? "true" : "false";
            } else {
                $this->RequestParams["RelationAction"] = $param["RelationAction"];
            }
        }
        if (array_key_exists("SecurityGroupId", $param) and $param["SecurityGroupId"] !== null) {
            if (is_bool($param["SecurityGroupId"])) {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("DBInstanceIdentifier", $param) and $param["DBInstanceIdentifier"] !== null) {
            $res = $this->formatFilterParams("DBInstanceIdentifier", $param["DBInstanceIdentifier"]);
            $this->_unserialize("DBInstanceIdentifier", $res);
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