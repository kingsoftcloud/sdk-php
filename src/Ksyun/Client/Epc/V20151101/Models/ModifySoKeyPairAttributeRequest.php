<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySoKeyPairAttributeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Description" => null,
         /**String**/
        "KeyPairId" => null,
         /**String**/
        "KeyPairName" => null,
         /**String**/
        "SoZoneId" => null,
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("KeyPairId",$param) and $param["KeyPairId"] !== null) {
            if(is_bool($param["KeyPairId"])){
                $this->RequestParams["KeyPairId"] = $param["KeyPairId"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyPairId"] = $param["KeyPairId"];
            }
        }
        if (array_key_exists("KeyPairName",$param) and $param["KeyPairName"] !== null) {
            if(is_bool($param["KeyPairName"])){
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"] ? "true" : "false";
            } else {
                $this->RequestParams["KeyPairName"] = $param["KeyPairName"];
            }
        }
        if (array_key_exists("SoZoneId",$param) and $param["SoZoneId"] !== null) {
            if(is_bool($param["SoZoneId"])){
                $this->RequestParams["SoZoneId"] = $param["SoZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["SoZoneId"] = $param["SoZoneId"];
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