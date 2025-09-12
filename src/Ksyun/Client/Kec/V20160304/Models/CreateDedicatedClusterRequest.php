<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDedicatedClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DedicatedClusterName" => null,
         /**String**/
        "Model" => null,
         /**String**/
        "AvailabilityZone" => null,
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
        if (array_key_exists("DedicatedClusterName",$param) and $param["DedicatedClusterName"] !== null) {
            if(is_bool($param["DedicatedClusterName"])){
                $this->RequestParams["DedicatedClusterName"] = $param["DedicatedClusterName"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedClusterName"] = $param["DedicatedClusterName"];
            }
        }
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            if(is_bool($param["Model"])){
                $this->RequestParams["Model"] = $param["Model"] ? "true" : "false";
            } else {
                $this->RequestParams["Model"] = $param["Model"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
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