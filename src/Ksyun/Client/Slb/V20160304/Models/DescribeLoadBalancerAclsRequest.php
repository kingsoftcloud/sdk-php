<?php

namespace Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeLoadBalancerAclsRequest extends BaseModel
{
    public $RequestParams = [
        /**Int**/
        "MaxResults" => null,
        /**String**/
        "NextToken" => null,
    ];

    /**特殊参数类型:Filter**/
    public $LoadBalancerAclId = [];

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
            $res = $this->formatFilterParams("LoadBalancerAclId", $param["LoadBalancerAclId"]);
            $this->_unserialize("LoadBalancerAclId", $res);
        }
        if (array_key_exists("MaxResults", $param) and $param["MaxResults"] !== null) {
            if (is_bool($param["MaxResults"])) {
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("NextToken", $param) and $param["NextToken"] !== null) {
            if (is_bool($param["NextToken"])) {
                $this->RequestParams["NextToken"] = $param["NextToken"] ? "true" : "false";
            } else {
                $this->RequestParams["NextToken"] = $param["NextToken"];
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