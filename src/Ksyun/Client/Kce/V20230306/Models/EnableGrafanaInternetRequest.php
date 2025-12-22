<?php
namespace  Ksyun\Client\Kce\V20230306\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class EnableGrafanaInternetRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**Boolean**/
        "EnableInternet" => null,
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
        if (array_key_exists("EnableInternet",$param) and $param["EnableInternet"] !== null) {
            if(is_bool($param["EnableInternet"])){
                $this->RequestParams["EnableInternet"] = $param["EnableInternet"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableInternet"] = $param["EnableInternet"];
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