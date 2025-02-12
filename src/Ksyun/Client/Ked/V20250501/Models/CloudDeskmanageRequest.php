<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CloudDeskmanageRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "instanceIds" => null,
         /**String**/
        "action1" => null,
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
        if (array_key_exists("action1",$param) and $param["action1"] !== null) {
            if(is_bool($param["action1"])){
                $this->RequestParams["action1"] = $param["action1"] ? "true" : "false";
            } else {
                $this->RequestParams["action1"] = $param["action1"];
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