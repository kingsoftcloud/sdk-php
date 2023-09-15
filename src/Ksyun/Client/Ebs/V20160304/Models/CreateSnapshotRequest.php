<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSnapshotRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VolumeId" => null,
         /**String**/
        "SnapshotName" => null,
         /**String**/
        "SnapshotDesc" => null,
         /**String**/
        "SnapshotType" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            if(is_bool($param["VolumeId"])){
                $this->RequestParams["VolumeId"] = $param["VolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeId"] = $param["VolumeId"];
            }
        }
        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            if(is_bool($param["SnapshotName"])){
                $this->RequestParams["SnapshotName"] = $param["SnapshotName"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotName"] = $param["SnapshotName"];
            }
        }
        if (array_key_exists("SnapshotDesc",$param) and $param["SnapshotDesc"] !== null) {
            if(is_bool($param["SnapshotDesc"])){
                $this->RequestParams["SnapshotDesc"] = $param["SnapshotDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotDesc"] = $param["SnapshotDesc"];
            }
        }
        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            if(is_bool($param["SnapshotType"])){
                $this->RequestParams["SnapshotType"] = $param["SnapshotType"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotType"] = $param["SnapshotType"];
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