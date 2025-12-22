<?php
namespace  Ksyun\Client\Influxdb\V20191010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSecurityRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "SecurityRuleCidrs" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("SecurityRuleCidrs",$param) and $param["SecurityRuleCidrs"] !== null) {
            if(is_bool($param["SecurityRuleCidrs"])){
                $this->RequestParams["SecurityRuleCidrs"] = $param["SecurityRuleCidrs"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityRuleCidrs"] = $param["SecurityRuleCidrs"];
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