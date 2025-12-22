<?php
namespace  Ksyun\Client\Postgresql\V20181225\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateResourceProtectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DBInstanceIdentifier" => null,
         /**String**/
        "ProtectionSwitch" => null,
         /**String**/
        "ProtectionReason" => null,
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
        if (array_key_exists("DBInstanceIdentifier",$param) and $param["DBInstanceIdentifier"] !== null) {
            if(is_bool($param["DBInstanceIdentifier"])){
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"] ? "true" : "false";
            } else {
                $this->RequestParams["DBInstanceIdentifier"] = $param["DBInstanceIdentifier"];
            }
        }
        if (array_key_exists("ProtectionSwitch",$param) and $param["ProtectionSwitch"] !== null) {
            if(is_bool($param["ProtectionSwitch"])){
                $this->RequestParams["ProtectionSwitch"] = $param["ProtectionSwitch"] ? "true" : "false";
            } else {
                $this->RequestParams["ProtectionSwitch"] = $param["ProtectionSwitch"];
            }
        }
        if (array_key_exists("ProtectionReason",$param) and $param["ProtectionReason"] !== null) {
            if(is_bool($param["ProtectionReason"])){
                $this->RequestParams["ProtectionReason"] = $param["ProtectionReason"] ? "true" : "false";
            } else {
                $this->RequestParams["ProtectionReason"] = $param["ProtectionReason"];
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