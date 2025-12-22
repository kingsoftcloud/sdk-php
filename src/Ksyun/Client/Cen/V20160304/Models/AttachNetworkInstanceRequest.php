<?php
namespace  Ksyun\Client\Cen\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AttachNetworkInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "CenId" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "InstanceRegion" => null,
         /**String**/
        "NetworkInstanceId" => null,
         /**String**/
        "InstanceAccountId" => null,
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
        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            if(is_bool($param["InstanceRegion"])){
                $this->RequestParams["InstanceRegion"] = $param["InstanceRegion"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceRegion"] = $param["InstanceRegion"];
            }
        }
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            if(is_bool($param["NetworkInstanceId"])){
                $this->RequestParams["NetworkInstanceId"] = $param["NetworkInstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkInstanceId"] = $param["NetworkInstanceId"];
            }
        }
        if (array_key_exists("InstanceAccountId",$param) and $param["InstanceAccountId"] !== null) {
            if(is_bool($param["InstanceAccountId"])){
                $this->RequestParams["InstanceAccountId"] = $param["InstanceAccountId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceAccountId"] = $param["InstanceAccountId"];
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