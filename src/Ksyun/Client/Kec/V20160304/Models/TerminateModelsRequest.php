<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class TerminateModelsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ModelId" => null,
         /**Int**/
        "ModelVersion" => null,
    ];


    public function __construct()
    {

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
        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            if(is_bool($param["ModelVersion"])){
                $this->RequestParams["ModelVersion"] = $param["ModelVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["ModelVersion"] = $param["ModelVersion"];
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