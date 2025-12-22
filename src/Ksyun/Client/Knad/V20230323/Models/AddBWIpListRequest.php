<?php
namespace  Ksyun\Client\Knad\V20230323\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddBWIpListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KnadId" => null,
         /**Array**/
        "Ip" => null,
         /**Int**/
        "type" => null,
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
        if (array_key_exists("KnadId",$param) and $param["KnadId"] !== null) {
            if(is_bool($param["KnadId"])){
                $this->RequestParams["KnadId"] = $param["KnadId"] ? "true" : "false";
            } else {
                $this->RequestParams["KnadId"] = $param["KnadId"];
            }
        }
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            if(is_bool($param["Ip"])){
                $this->RequestParams["Ip"] = $param["Ip"] ? "true" : "false";
            } else {
                $this->RequestParams["Ip"] = $param["Ip"];
            }
        }
        if (array_key_exists("type",$param) and $param["type"] !== null) {
            if(is_bool($param["type"])){
                $this->RequestParams["type"] = $param["type"] ? "true" : "false";
            } else {
                $this->RequestParams["type"] = $param["type"];
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