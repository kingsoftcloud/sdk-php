<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeResourcePoolInstanceSpecsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourcePoolId" => null,
         /**String**/
        "GPUModel" => null,
         /**Boolean**/
        "OnlyCPU" => null,
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
        if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
            if(is_bool($param["ResourcePoolId"])){
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"];
            }
        }
        if (array_key_exists("GPUModel",$param) and $param["GPUModel"] !== null) {
            if(is_bool($param["GPUModel"])){
                $this->RequestParams["GPUModel"] = $param["GPUModel"] ? "true" : "false";
            } else {
                $this->RequestParams["GPUModel"] = $param["GPUModel"];
            }
        }
        if (array_key_exists("OnlyCPU",$param) and $param["OnlyCPU"] !== null) {
            if(is_bool($param["OnlyCPU"])){
                $this->RequestParams["OnlyCPU"] = $param["OnlyCPU"] ? "true" : "false";
            } else {
                $this->RequestParams["OnlyCPU"] = $param["OnlyCPU"];
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