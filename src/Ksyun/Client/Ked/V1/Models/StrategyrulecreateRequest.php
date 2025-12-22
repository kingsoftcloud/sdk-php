<?php
namespace  Ksyun\Client\Ked\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StrategyrulecreateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "name" => null,
         /**String**/
        "description" => null,
         /**Array**/
        "policies" => null,
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
        if (array_key_exists("name",$param) and $param["name"] !== null) {
            if(is_bool($param["name"])){
                $this->RequestParams["name"] = $param["name"] ? "true" : "false";
            } else {
                $this->RequestParams["name"] = $param["name"];
            }
        }
        if (array_key_exists("description",$param) and $param["description"] !== null) {
            if(is_bool($param["description"])){
                $this->RequestParams["description"] = $param["description"] ? "true" : "false";
            } else {
                $this->RequestParams["description"] = $param["description"];
            }
        }
        if (array_key_exists("policies",$param) and $param["policies"] !== null) {
            if(is_bool($param["policies"])){
                $this->RequestParams["policies"] = $param["policies"] ? "true" : "false";
            } else {
                $this->RequestParams["policies"] = $param["policies"];
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