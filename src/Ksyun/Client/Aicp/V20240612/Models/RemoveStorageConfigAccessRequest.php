<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RemoveStorageConfigAccessRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StorageConfigId" => null,
         /**String**/
        "KsyunUserId" => null,
         /**String**/
        "SharedGroupId" => null,
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
        if (array_key_exists("StorageConfigId",$param) and $param["StorageConfigId"] !== null) {
            if(is_bool($param["StorageConfigId"])){
                $this->RequestParams["StorageConfigId"] = $param["StorageConfigId"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigId"] = $param["StorageConfigId"];
            }
        }
        if (array_key_exists("KsyunUserId",$param) and $param["KsyunUserId"] !== null) {
            if(is_bool($param["KsyunUserId"])){
                $this->RequestParams["KsyunUserId"] = $param["KsyunUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["KsyunUserId"] = $param["KsyunUserId"];
            }
        }
        if (array_key_exists("SharedGroupId",$param) and $param["SharedGroupId"] !== null) {
            if(is_bool($param["SharedGroupId"])){
                $this->RequestParams["SharedGroupId"] = $param["SharedGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SharedGroupId"] = $param["SharedGroupId"];
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