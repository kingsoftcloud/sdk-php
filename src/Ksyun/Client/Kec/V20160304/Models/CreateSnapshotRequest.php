<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSnapshotRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "SnapshotName" => null,
         /**String**/
        "Description" => null,
         /**Int**/
        "AliveDays" => null,
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
            }
        }
        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            if(is_bool($param["SnapshotName"])){
                $this->RequestParams["SnapshotName"] = $param["SnapshotName"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotName"] = $param["SnapshotName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            if(is_bool($param["AliveDays"])){
                $this->RequestParams["AliveDays"] = $param["AliveDays"] ? "true" : "false";
            } else {
                $this->RequestParams["AliveDays"] = $param["AliveDays"];
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