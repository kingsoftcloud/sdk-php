<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ImageeditRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "id" => null,
         /**String**/
        "imageId" => null,
         /**String**/
        "imageName" => null,
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
        if (array_key_exists("id",$param) and $param["id"] !== null) {
            if(is_bool($param["id"])){
                $this->RequestParams["id"] = $param["id"] ? "true" : "false";
            } else {
                $this->RequestParams["id"] = $param["id"];
            }
        }
        if (array_key_exists("imageId",$param) and $param["imageId"] !== null) {
            if(is_bool($param["imageId"])){
                $this->RequestParams["imageId"] = $param["imageId"] ? "true" : "false";
            } else {
                $this->RequestParams["imageId"] = $param["imageId"];
            }
        }
        if (array_key_exists("imageName",$param) and $param["imageName"] !== null) {
            if(is_bool($param["imageName"])){
                $this->RequestParams["imageName"] = $param["imageName"] ? "true" : "false";
            } else {
                $this->RequestParams["imageName"] = $param["imageName"];
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