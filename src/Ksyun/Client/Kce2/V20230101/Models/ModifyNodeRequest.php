<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNodeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusteId" => null,
         /**String**/
        "KceNodeId" => null,
         /**String**/
        "InstanceId" => null,
         /**Array**/
        "Components" => null,
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
        if (array_key_exists("ClusteId",$param) and $param["ClusteId"] !== null) {
            if(is_bool($param["ClusteId"])){
                $this->RequestParams["ClusteId"] = $param["ClusteId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusteId"] = $param["ClusteId"];
            }
        }
        if (array_key_exists("KceNodeId",$param) and $param["KceNodeId"] !== null) {
            if(is_bool($param["KceNodeId"])){
                $this->RequestParams["KceNodeId"] = $param["KceNodeId"] ? "true" : "false";
            } else {
                $this->RequestParams["KceNodeId"] = $param["KceNodeId"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            if(is_bool($param["Components"])){
                $this->RequestParams["Components"] = $param["Components"] ? "true" : "false";
            } else {
                $this->RequestParams["Components"] = $param["Components"];
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