<?php
namespace  Ksyun\Client\Kcf\V20211215\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyAutoScaledTriggerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FucntionId" => null,
         /**String**/
        "Name" => null,
         /**Object**/
        "TriggerConfig" => null,
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
        if (array_key_exists("FucntionId",$param) and $param["FucntionId"] !== null) {
            if(is_bool($param["FucntionId"])){
                $this->RequestParams["FucntionId"] = $param["FucntionId"] ? "true" : "false";
            } else {
                $this->RequestParams["FucntionId"] = $param["FucntionId"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("TriggerConfig",$param) and $param["TriggerConfig"] !== null) {
            if(is_bool($param["TriggerConfig"])){
                $this->RequestParams["TriggerConfig"] = $param["TriggerConfig"] ? "true" : "false";
            } else {
                $this->RequestParams["TriggerConfig"] = $param["TriggerConfig"];
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