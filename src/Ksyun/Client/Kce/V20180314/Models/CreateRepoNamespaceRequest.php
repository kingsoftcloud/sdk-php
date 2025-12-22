<?php
namespace  Ksyun\Client\Kce\V20180314\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateRepoNamespaceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Namespace" => null,
         /**String**/
        "Public" => null,
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            if(is_bool($param["Public"])){
                $this->RequestParams["Public"] = $param["Public"] ? "true" : "false";
            } else {
                $this->RequestParams["Public"] = $param["Public"];
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