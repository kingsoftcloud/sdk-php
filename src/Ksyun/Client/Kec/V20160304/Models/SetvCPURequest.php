<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetvCPURequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "VCPU" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DedicatedHostId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DedicatedHostId",$param) and $param["DedicatedHostId"] !== null) {
            $res = $this->formatFilterParams("DedicatedHostId",$param["DedicatedHostId"]);
            $this->_unserialize("DedicatedHostId",$res);
        }
        if (array_key_exists("VCPU",$param) and $param["VCPU"] !== null) {
            if(is_bool($param["VCPU"])){
                $this->RequestParams["VCPU"] = $param["VCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["VCPU"] = $param["VCPU"];
            }
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