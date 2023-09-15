<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySnapshotRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SnapshotId" => null,
         /**String**/
        "SnapshotName" => null,
         /**String**/
        "SnapshotDesc" => null,
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            if(is_bool($param["SnapshotId"])){
                $this->RequestParams["SnapshotId"] = $param["SnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotId"] = $param["SnapshotId"];
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