<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyDedicatedBlockStorageClusterAttributeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DbscId" => null,
         /**String**/
        "DbscName" => null,
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "DbscDesc" => null,
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
        if (array_key_exists("DbscId",$param) and $param["DbscId"] !== null) {
            if(is_bool($param["DbscId"])){
                $this->RequestParams["DbscId"] = $param["DbscId"] ? "true" : "false";
            } else {
                $this->RequestParams["DbscId"] = $param["DbscId"];
            }
        }
        if (array_key_exists("DbscName",$param) and $param["DbscName"] !== null) {
            if(is_bool($param["DbscName"])){
                $this->RequestParams["DbscName"] = $param["DbscName"] ? "true" : "false";
            } else {
                $this->RequestParams["DbscName"] = $param["DbscName"];
            }
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("DbscDesc",$param) and $param["DbscDesc"] !== null) {
            if(is_bool($param["DbscDesc"])){
                $this->RequestParams["DbscDesc"] = $param["DbscDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["DbscDesc"] = $param["DbscDesc"];
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