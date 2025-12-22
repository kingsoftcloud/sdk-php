<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteNodeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**Array**/
        "NodeIds" => null,
         /**Boolean**/
        "InstanceDelete" => null,
         /**String**/
        "KceNodeIds" => null,
         /**Array**/
        "InstanceIds" => null,
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            if(is_bool($param["NodeIds"])){
                $this->RequestParams["NodeIds"] = $param["NodeIds"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeIds"] = $param["NodeIds"];
            }
        }
        if (array_key_exists("InstanceDelete",$param) and $param["InstanceDelete"] !== null) {
            if(is_bool($param["InstanceDelete"])){
                $this->RequestParams["InstanceDelete"] = $param["InstanceDelete"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceDelete"] = $param["InstanceDelete"];
            }
        }
        if (array_key_exists("KceNodeIds",$param) and $param["KceNodeIds"] !== null) {
            if(is_bool($param["KceNodeIds"])){
                $this->RequestParams["KceNodeIds"] = $param["KceNodeIds"] ? "true" : "false";
            } else {
                $this->RequestParams["KceNodeIds"] = $param["KceNodeIds"];
            }
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            if(is_bool($param["InstanceIds"])){
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"];
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