<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteStorageConfigRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "StorageConfigId" => null,
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
        if (array_key_exists("StorageConfigId",$param) and $param["StorageConfigId"] !== null) {
            if(is_bool($param["StorageConfigId"])){
                $this->RequestParams["StorageConfigId"] = $param["StorageConfigId"] ? "true" : "false";
            } else {
                $this->RequestParams["StorageConfigId"] = $param["StorageConfigId"];
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