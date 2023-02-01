<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeVolumesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VolumeCategory" => null,
         /**String**/
        "VolumeStatus" => null,
         /**String**/
        "VolumeType" => null,
         /**String**/
        "VolumeCreateDate" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
    ];

     /**特殊参数类型:Filter**/
    public $VolumeId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $res = $this->formatFilterParams("VolumeId",$param["VolumeId"]);
            $this->_unserialize("VolumeId",$res);
        }
        if (array_key_exists("VolumeCategory",$param) and $param["VolumeCategory"] !== null) {
            if(is_bool($param["VolumeCategory"])){
                $this->RequestParams["VolumeCategory"] = $param["VolumeCategory"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeCategory"] = $param["VolumeCategory"];
            }
        }
        if (array_key_exists("VolumeStatus",$param) and $param["VolumeStatus"] !== null) {
            if(is_bool($param["VolumeStatus"])){
                $this->RequestParams["VolumeStatus"] = $param["VolumeStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeStatus"] = $param["VolumeStatus"];
            }
        }
        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            if(is_bool($param["VolumeType"])){
                $this->RequestParams["VolumeType"] = $param["VolumeType"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeType"] = $param["VolumeType"];
            }
        }
        if (array_key_exists("VolumeCreateDate",$param) and $param["VolumeCreateDate"] !== null) {
            if(is_bool($param["VolumeCreateDate"])){
                $this->RequestParams["VolumeCreateDate"] = $param["VolumeCreateDate"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeCreateDate"] = $param["VolumeCreateDate"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
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