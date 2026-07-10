<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateMemoryCollectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**String**/
        "Description" => null,
         /**Object**/
        "LongTermConfiguration" => null,
         /**String**/
        "MemoryType" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "ChargeType" => null,
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("LongTermConfiguration",$param) and $param["LongTermConfiguration"] !== null) {
            if(is_bool($param["LongTermConfiguration"])){
                $this->RequestParams["LongTermConfiguration"] = $param["LongTermConfiguration"] ? "true" : "false";
            } else {
                $this->RequestParams["LongTermConfiguration"] = $param["LongTermConfiguration"];
            }
        }
        if (array_key_exists("MemoryType",$param) and $param["MemoryType"] !== null) {
            if(is_bool($param["MemoryType"])){
                $this->RequestParams["MemoryType"] = $param["MemoryType"] ? "true" : "false";
            } else {
                $this->RequestParams["MemoryType"] = $param["MemoryType"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
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