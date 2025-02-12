<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ImagecreateRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "imageName" => null,
         /**String**/
        "description" => null,
         /**String**/
        "instanceId" => null,
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
        if (array_key_exists("imageName",$param) and $param["imageName"] !== null) {
            if(is_bool($param["imageName"])){
                $this->RequestParams["imageName"] = $param["imageName"] ? "true" : "false";
            } else {
                $this->RequestParams["imageName"] = $param["imageName"];
            }
        }
        if (array_key_exists("description",$param) and $param["description"] !== null) {
            if(is_bool($param["description"])){
                $this->RequestParams["description"] = $param["description"] ? "true" : "false";
            } else {
                $this->RequestParams["description"] = $param["description"];
            }
        }
        if (array_key_exists("instanceId",$param) and $param["instanceId"] !== null) {
            if(is_bool($param["instanceId"])){
                $this->RequestParams["instanceId"] = $param["instanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceId"] = $param["instanceId"];
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