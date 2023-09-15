<?php
namespace  Ksyun\Client\Slb\V20171210\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeLoadBalancersRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "State" => null,
    ];

     /**特殊参数类型:Filter**/
    public $LoadBalancerId = [];
      /**特殊参数类型:Filter**/
    public $ProjectId = [];
      /**特殊参数类型:Filter**/
    public $Filter = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $res = $this->formatFilterParams("LoadBalancerId",$param["LoadBalancerId"]);
            $this->_unserialize("LoadBalancerId",$res);
        }
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            if(is_bool($param["State"])){
                $this->RequestParams["State"] = $param["State"] ? "true" : "false";
            } else {
                $this->RequestParams["State"] = $param["State"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId",$param["ProjectId"]);
            $this->_unserialize("ProjectId",$res);
        }
        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $res = $this->formatFilterParams("Filter",$param["Filter"]);
            $this->_unserialize("Filter",$res);
        }

    }

    private function _unserialize($name,$params)
    {
        if ($params === null) {
            return;
        }
        foreach ($params as $key => $value){
            $this->$name[$key] = $value;
        }

    }
}