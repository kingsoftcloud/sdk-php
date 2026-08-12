<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateFileSystemRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemName" => null,
         /**String**/
        "Region" => null,
         /**String**/
        "AvailZone" => null,
         /**String**/
        "ChargeType" => null,
         /**Long**/
        "PurchaseTime" => null,
         /**String**/
        "StoreClass" => null,
         /**Long**/
        "Capacity" => null,
         /**Long**/
        "ChunkSize" => null,
         /**String**/
        "ClusterCode" => null,
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
        if (array_key_exists("FileSystemName",$param) and $param["FileSystemName"] !== null) {
            if(is_bool($param["FileSystemName"])){
                $this->RequestParams["FileSystemName"] = $param["FileSystemName"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemName"] = $param["FileSystemName"];
            }
        }
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            if(is_bool($param["Region"])){
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
            }
        }
        if (array_key_exists("AvailZone",$param) and $param["AvailZone"] !== null) {
            if(is_bool($param["AvailZone"])){
                $this->RequestParams["AvailZone"] = $param["AvailZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailZone"] = $param["AvailZone"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("PurchaseTime",$param) and $param["PurchaseTime"] !== null) {
            if(is_bool($param["PurchaseTime"])){
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"] ? "true" : "false";
            } else {
                $this->RequestParams["PurchaseTime"] = $param["PurchaseTime"];
            }
        }
        if (array_key_exists("StoreClass",$param) and $param["StoreClass"] !== null) {
            if(is_bool($param["StoreClass"])){
                $this->RequestParams["StoreClass"] = $param["StoreClass"] ? "true" : "false";
            } else {
                $this->RequestParams["StoreClass"] = $param["StoreClass"];
            }
        }
        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            if(is_bool($param["Capacity"])){
                $this->RequestParams["Capacity"] = $param["Capacity"] ? "true" : "false";
            } else {
                $this->RequestParams["Capacity"] = $param["Capacity"];
            }
        }
        if (array_key_exists("ChunkSize",$param) and $param["ChunkSize"] !== null) {
            if(is_bool($param["ChunkSize"])){
                $this->RequestParams["ChunkSize"] = $param["ChunkSize"] ? "true" : "false";
            } else {
                $this->RequestParams["ChunkSize"] = $param["ChunkSize"];
            }
        }
        if (array_key_exists("ClusterCode",$param) and $param["ClusterCode"] !== null) {
            if(is_bool($param["ClusterCode"])){
                $this->RequestParams["ClusterCode"] = $param["ClusterCode"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterCode"] = $param["ClusterCode"];
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