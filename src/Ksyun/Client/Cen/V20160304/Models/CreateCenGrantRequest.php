<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateCenGrantRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CenId" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "NetworkInstanceId" => null,
         /**String**/
        "CenAccountId" => null,
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
        if (array_key_exists("CenId",$param) and $param["CenId"] !== null) {
            if(is_bool($param["CenId"])){
                $this->RequestParams["CenId"] = $param["CenId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenId"] = $param["CenId"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            if(is_bool($param["NetworkInstanceId"])){
                $this->RequestParams["NetworkInstanceId"] = $param["NetworkInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInstanceId"] = $param["NetworkInstanceId"];
            }
        }
        if (array_key_exists("CenAccountId",$param) and $param["CenAccountId"] !== null) {
            if(is_bool($param["CenAccountId"])){
                $this->RequestParams["CenAccountId"] = $param["CenAccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["CenAccountId"] = $param["CenAccountId"];
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