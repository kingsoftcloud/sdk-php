<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class SetAlbModificationProtectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "albId" => null,
         /**String**/
        "modificationProtection" => null,
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
        if (array_key_exists("albId",$param) and $param["albId"] !== null) {
            if(is_bool($param["albId"])){
                $this->RequestParams["albId"] = $param["albId"] ? "true" : "false";
            } else {
                $this->RequestParams["albId"] = $param["albId"];
            }
        }
        if (array_key_exists("modificationProtection",$param) and $param["modificationProtection"] !== null) {
            if(is_bool($param["modificationProtection"])){
                $this->RequestParams["modificationProtection"] = $param["modificationProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["modificationProtection"] = $param["modificationProtection"];
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