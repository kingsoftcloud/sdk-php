<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteLoadBalancerAclEntryRequest extends BaseModel
{
    public $RequestParams = [
        /**String**/
        "LoadBalancerAclEntryId" => null,
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
        if (array_key_exists("LoadBalancerAclEntryId", $param) and $param["LoadBalancerAclEntryId"] !== null) {
            if (is_bool($param["LoadBalancerAclEntryId"])) {
                $this->RequestParams["LoadBalancerAclEntryId"] = $param["LoadBalancerAclEntryId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerAclEntryId"] = $param["LoadBalancerAclEntryId"];
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