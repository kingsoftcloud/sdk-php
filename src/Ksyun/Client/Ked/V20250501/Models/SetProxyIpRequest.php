<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetProxyIpRequest extends BaseModel
{
    public $RequestParams = [
         /**Array**/
        "instanceIds" => null,
         /**String**/
        "province" => null,
         /**String**/
        "isp" => null,
         /**String**/
        "city" => null,
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
        if (array_key_exists("instanceIds",$param) and $param["instanceIds"] !== null) {
            if(is_bool($param["instanceIds"])){
                $this->RequestParams["instanceIds"] = $param["instanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceIds"] = $param["instanceIds"];
            }
        }
        if (array_key_exists("province",$param) and $param["province"] !== null) {
            if(is_bool($param["province"])){
                $this->RequestParams["province"] = $param["province"] ? "true" : "false";
            } else {
                $this->RequestParams["province"] = $param["province"];
            }
        }
        if (array_key_exists("isp",$param) and $param["isp"] !== null) {
            if(is_bool($param["isp"])){
                $this->RequestParams["isp"] = $param["isp"] ? "true" : "false";
            } else {
                $this->RequestParams["isp"] = $param["isp"];
            }
        }
        if (array_key_exists("city",$param) and $param["city"] !== null) {
            if(is_bool($param["city"])){
                $this->RequestParams["city"] = $param["city"] ? "true" : "false";
            } else {
                $this->RequestParams["city"] = $param["city"];
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