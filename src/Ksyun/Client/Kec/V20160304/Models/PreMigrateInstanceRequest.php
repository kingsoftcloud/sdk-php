<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class PreMigrateInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "InstanceType" => null,
         /**String**/
        "SystemDiskType" => null,
         /**String**/
        "DataDiskType" => null,
         /**Boolean**/
        "InstantAccess" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            if(is_bool($param["InstanceType"])){
                $this->RequestParams["InstanceType"] = $param["InstanceType"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceType"] = $param["InstanceType"];
            }
        }
        if (array_key_exists("SystemDiskType",$param) and $param["SystemDiskType"] !== null) {
            if(is_bool($param["SystemDiskType"])){
                $this->RequestParams["SystemDiskType"] = $param["SystemDiskType"] ? "true" : "false";
            } else {
                $this->RequestParams["SystemDiskType"] = $param["SystemDiskType"];
            }
        }
        if (array_key_exists("DataDiskType",$param) and $param["DataDiskType"] !== null) {
            if(is_bool($param["DataDiskType"])){
                $this->RequestParams["DataDiskType"] = $param["DataDiskType"] ? "true" : "false";
            } else {
                $this->RequestParams["DataDiskType"] = $param["DataDiskType"];
            }
        }
        if (array_key_exists("InstantAccess",$param) and $param["InstantAccess"] !== null) {
            if(is_bool($param["InstantAccess"])){
                $this->RequestParams["InstantAccess"] = $param["InstantAccess"] ? "true" : "false";
            } else {
                $this->RequestParams["InstantAccess"] = $param["InstantAccess"];
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