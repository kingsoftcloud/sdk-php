<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeLocalVolumeSnapshotsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Action" => null,
         /**String**/
        "Version" => null,
         /**String**/
        "LocalVolumeName" => null,
         /**String**/
        "SourceLocalVolumeId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            if(is_bool($param["Action"])){
                $this->RequestParams["Action"] = $param["Action"] ? "true" : "false";
            } else {
                $this->RequestParams["Action"] = $param["Action"];
            }
        }
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            if(is_bool($param["Version"])){
                $this->RequestParams["Version"] = $param["Version"] ? "true" : "false";
            } else {
                $this->RequestParams["Version"] = $param["Version"];
            }
        }
        if (array_key_exists("LocalVolumeName",$param) and $param["LocalVolumeName"] !== null) {
            if(is_bool($param["LocalVolumeName"])){
                $this->RequestParams["LocalVolumeName"] = $param["LocalVolumeName"] ? "true" : "false";
            } else {
                $this->RequestParams["LocalVolumeName"] = $param["LocalVolumeName"];
            }
        }
        if (array_key_exists("SourceLocalVolumeId",$param) and $param["SourceLocalVolumeId"] !== null) {
            if(is_bool($param["SourceLocalVolumeId"])){
                $this->RequestParams["SourceLocalVolumeId"] = $param["SourceLocalVolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceLocalVolumeId"] = $param["SourceLocalVolumeId"];
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