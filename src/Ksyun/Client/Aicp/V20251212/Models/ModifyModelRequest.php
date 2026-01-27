<?php
namespace  Ksyun\Client\Aicp\V20251212\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyModelRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ModelId" => null,
         /**String**/
        "ModelName" => null,
         /**String**/
        "ModelDescription" => null,
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            if(is_bool($param["ModelId"])){
                $this->RequestParams["ModelId"] = $param["ModelId"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelId"] = $param["ModelId"];
            }
        }
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            if(is_bool($param["ModelName"])){
                $this->RequestParams["ModelName"] = $param["ModelName"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelName"] = $param["ModelName"];
            }
        }
        if (array_key_exists("ModelDescription",$param) and $param["ModelDescription"] !== null) {
            if(is_bool($param["ModelDescription"])){
                $this->RequestParams["ModelDescription"] = $param["ModelDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelDescription"] = $param["ModelDescription"];
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