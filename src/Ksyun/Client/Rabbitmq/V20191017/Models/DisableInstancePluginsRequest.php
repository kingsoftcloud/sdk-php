<?php
namespace  Ksyun\Client\Rabbitmq\V20191017\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DisableInstancePluginsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**Array**/
        "DisablePlugins" => null,
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
        if (array_key_exists("DisablePlugins",$param) and $param["DisablePlugins"] !== null) {
            if(is_bool($param["DisablePlugins"])){
                $this->RequestParams["DisablePlugins"] = $param["DisablePlugins"] ? "true" : "false";
            } else {
                $this->RequestParams["DisablePlugins"] = $param["DisablePlugins"];
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