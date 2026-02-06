<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteAutoScaledTriggerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Functionid" => null,
         /**String**/
        "TriggerName" => null,
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
        if (array_key_exists("Functionid",$param) and $param["Functionid"] !== null) {
            if(is_bool($param["Functionid"])){
                $this->RequestParams["Functionid"] = $param["Functionid"] ? "true" : "false";
            } else {
                $this->RequestParams["Functionid"] = $param["Functionid"];
            }
        }
        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            if(is_bool($param["TriggerName"])){
                $this->RequestParams["TriggerName"] = $param["TriggerName"] ? "true" : "false";
            } else {
                $this->RequestParams["TriggerName"] = $param["TriggerName"];
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