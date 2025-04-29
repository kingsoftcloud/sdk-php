<?php

namespace Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "SecurityGroupIds" => null,
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
        if (array_key_exists("SecurityGroupIds", $param) and $param["SecurityGroupIds"] !== null) {
            if (is_bool($param["SecurityGroupIds"])) {
                $this->RequestParams["SecurityGroupIds"] = $param["SecurityGroupIds"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupIds"] = $param["SecurityGroupIds"];
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