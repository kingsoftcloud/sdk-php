<?php
namespace  Ksyun\Client\Trade\V20200831\Models;

use Ksyun\Common\BaseModel;

class SetRenewalRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceIds" => null,
         /**Int**/
        "RenewStrategy" => null,
         /**Int**/
        "RenewDuration" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            if(is_bool($param["InstanceIds"])){
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceIds"] = $param["InstanceIds"];
            }
        }
        if (array_key_exists("RenewStrategy",$param) and $param["RenewStrategy"] !== null) {
            if(is_bool($param["RenewStrategy"])){
                $this->RequestParams["RenewStrategy"] = $param["RenewStrategy"] ? "true" : "false";
            } else {
                $this->RequestParams["RenewStrategy"] = $param["RenewStrategy"];
            }
        }
        if (array_key_exists("RenewDuration",$param) and $param["RenewDuration"] !== null) {
            if(is_bool($param["RenewDuration"])){
                $this->RequestParams["RenewDuration"] = $param["RenewDuration"] ? "true" : "false";
            } else {
                $this->RequestParams["RenewDuration"] = $param["RenewDuration"];
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