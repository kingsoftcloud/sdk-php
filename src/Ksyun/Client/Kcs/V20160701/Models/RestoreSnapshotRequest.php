<?php
namespace  Ksyun\Client\Kcs\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RestoreSnapshotRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailableZone" => null,
         /**String**/
        "Cacheld" => null,
         /**String**/
        "Type" => null,
         /**String**/
        "SnapshotId" => null,
         /**String**/
        "BucketName" => null,
         /**String**/
        "ObjectName" => null,
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
        if (array_key_exists("AvailableZone",$param) and $param["AvailableZone"] !== null) {
            if(is_bool($param["AvailableZone"])){
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailableZone"] = $param["AvailableZone"];
            }
        }
        if (array_key_exists("Cacheld",$param) and $param["Cacheld"] !== null) {
            if(is_bool($param["Cacheld"])){
                $this->RequestParams["Cacheld"] = $param["Cacheld"] ? "true" : "false";
            } else {
                $this->RequestParams["Cacheld"] = $param["Cacheld"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            if(is_bool($param["SnapshotId"])){
                $this->RequestParams["SnapshotId"] = $param["SnapshotId"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotId"] = $param["SnapshotId"];
            }
        }
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            if(is_bool($param["BucketName"])){
                $this->RequestParams["BucketName"] = $param["BucketName"] ? "true" : "false";
            } else {
                $this->RequestParams["BucketName"] = $param["BucketName"];
            }
        }
        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            if(is_bool($param["ObjectName"])){
                $this->RequestParams["ObjectName"] = $param["ObjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["ObjectName"] = $param["ObjectName"];
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