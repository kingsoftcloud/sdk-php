<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RestoreByTimePointSwitchRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CacheId" => null,
         /**String**/
        "RestoreSwitch" => null,
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
        if (array_key_exists("CacheId",$param) and $param["CacheId"] !== null) {
            if(is_bool($param["CacheId"])){
                $this->RequestParams["CacheId"] = $param["CacheId"] ? "true" : "false";
            } else {
                $this->RequestParams["CacheId"] = $param["CacheId"];
            }
        }
        if (array_key_exists("RestoreSwitch",$param) and $param["RestoreSwitch"] !== null) {
            if(is_bool($param["RestoreSwitch"])){
                $this->RequestParams["RestoreSwitch"] = $param["RestoreSwitch"] ? "true" : "false";
            } else {
                $this->RequestParams["RestoreSwitch"] = $param["RestoreSwitch"];
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