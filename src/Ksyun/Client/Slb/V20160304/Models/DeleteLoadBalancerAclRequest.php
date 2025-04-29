<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteLoadBalancerAclRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "LoadBalancerAclId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerAclId", $param) and $param["LoadBalancerAclId"] !== null) {
            if (is_bool($param["LoadBalancerAclId"])) {
                $this->RequestParams["LoadBalancerAclId"] = $param["LoadBalancerAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerAclId"] = $param["LoadBalancerAclId"];
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