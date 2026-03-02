<?php
namespace  Ksyun\Client\Kmaf\V20260130\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class QueryAnswerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AppId" => null,
         /**String**/
        "MsgId" => null,
         /**Int**/
        "UseStream" => null,
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            if(is_bool($param["AppId"])){
                $this->RequestParams["AppId"] = $param["AppId"] ? "true" : "false";
            } else {
                $this->RequestParams["AppId"] = $param["AppId"];
            }
        }
        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            if(is_bool($param["MsgId"])){
                $this->RequestParams["MsgId"] = $param["MsgId"] ? "true" : "false";
            } else {
                $this->RequestParams["MsgId"] = $param["MsgId"];
            }
        }
        if (array_key_exists("UseStream",$param) and $param["UseStream"] !== null) {
            if(is_bool($param["UseStream"])){
                $this->RequestParams["UseStream"] = $param["UseStream"] ? "true" : "false";
            } else {
                $this->RequestParams["UseStream"] = $param["UseStream"];
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