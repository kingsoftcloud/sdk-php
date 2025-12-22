<?php
namespace  Ksyun\Client\Slb\V20250430\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetEnableAccessLogRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LoadBalancerId" => null,
         /**Boolean**/
        "EnabledLog" => null,
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            if(is_bool($param["LoadBalancerId"])){
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"] ? "true" : "false";
            } else {
                $this->RequestParams["LoadBalancerId"] = $param["LoadBalancerId"];
            }
        }
        if (array_key_exists("EnabledLog",$param) and $param["EnabledLog"] !== null) {
            if(is_bool($param["EnabledLog"])){
                $this->RequestParams["EnabledLog"] = $param["EnabledLog"] ? "true" : "false";
            } else {
                $this->RequestParams["EnabledLog"] = $param["EnabledLog"];
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