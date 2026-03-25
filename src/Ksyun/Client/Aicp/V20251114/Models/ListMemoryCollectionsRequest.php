<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListMemoryCollectionsRequest extends BaseModel
{
    public $RequestParams = [
         /**Long**/
        "CreateTimeAfter" => null,
         /**Long**/
        "CreateTimeBefore" => null,
         /**Long**/
        "UpdateTimeAfter" => null,
         /**Long**/
        "UpdateTimeBefore" => null,
         /**String**/
        "MemoryCollectionId" => null,
         /**String**/
        "Name" => null,
         /**String**/
        "NameKeyword" => null,
         /**String**/
        "Status" => null,
         /**Long**/
        "Marker" => null,
         /**Long**/
        "MaxResults" => null,
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
        if (array_key_exists("CreateTimeAfter",$param) and $param["CreateTimeAfter"] !== null) {
            if(is_bool($param["CreateTimeAfter"])){
                $this->RequestParams["CreateTimeAfter"] = $param["CreateTimeAfter"] ? "true" : "false";
            } else {
                $this->RequestParams["CreateTimeAfter"] = $param["CreateTimeAfter"];
            }
        }
        if (array_key_exists("CreateTimeBefore",$param) and $param["CreateTimeBefore"] !== null) {
            if(is_bool($param["CreateTimeBefore"])){
                $this->RequestParams["CreateTimeBefore"] = $param["CreateTimeBefore"] ? "true" : "false";
            } else {
                $this->RequestParams["CreateTimeBefore"] = $param["CreateTimeBefore"];
            }
        }
        if (array_key_exists("UpdateTimeAfter",$param) and $param["UpdateTimeAfter"] !== null) {
            if(is_bool($param["UpdateTimeAfter"])){
                $this->RequestParams["UpdateTimeAfter"] = $param["UpdateTimeAfter"] ? "true" : "false";
            } else {
                $this->RequestParams["UpdateTimeAfter"] = $param["UpdateTimeAfter"];
            }
        }
        if (array_key_exists("UpdateTimeBefore",$param) and $param["UpdateTimeBefore"] !== null) {
            if(is_bool($param["UpdateTimeBefore"])){
                $this->RequestParams["UpdateTimeBefore"] = $param["UpdateTimeBefore"] ? "true" : "false";
            } else {
                $this->RequestParams["UpdateTimeBefore"] = $param["UpdateTimeBefore"];
            }
        }
        if (array_key_exists("MemoryCollectionId",$param) and $param["MemoryCollectionId"] !== null) {
            if(is_bool($param["MemoryCollectionId"])){
                $this->RequestParams["MemoryCollectionId"] = $param["MemoryCollectionId"] ? "true" : "false";
            } else {
                $this->RequestParams["MemoryCollectionId"] = $param["MemoryCollectionId"];
            }
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("NameKeyword",$param) and $param["NameKeyword"] !== null) {
            if(is_bool($param["NameKeyword"])){
                $this->RequestParams["NameKeyword"] = $param["NameKeyword"] ? "true" : "false";
            } else {
                $this->RequestParams["NameKeyword"] = $param["NameKeyword"];
            }
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            if(is_bool($param["Status"])){
                $this->RequestParams["Status"] = $param["Status"] ? "true" : "false";
            } else {
                $this->RequestParams["Status"] = $param["Status"];
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