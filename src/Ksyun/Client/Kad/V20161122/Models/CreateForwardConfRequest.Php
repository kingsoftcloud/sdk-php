<?php
namespace  Ksyun\Client\Kad\V20161122\Models;

use Ksyun\Common\BaseModel;

class CreateForwardConfRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "KadId" => null,
         /**String**/
        "Protocol" => null,
         /**Int**/
        "ServicePort" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("KadId",$param) and $param["KadId"] !== null) {
            if(is_bool($param["KadId"])){
                $this->RequestParams["KadId"] = $param["KadId"] ? "true" : "false";
            } else {
                $this->RequestParams["KadId"] = $param["KadId"];
            }
        }
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            if(is_bool($param["Protocol"])){
                $this->RequestParams["Protocol"] = $param["Protocol"] ? "true" : "false";
            } else {
                $this->RequestParams["Protocol"] = $param["Protocol"];
            }
        }
        if (array_key_exists("ServicePort",$param) and $param["ServicePort"] !== null) {
            if(is_bool($param["ServicePort"])){
                $this->RequestParams["ServicePort"] = $param["ServicePort"] ? "true" : "false";
            } else {
                $this->RequestParams["ServicePort"] = $param["ServicePort"];
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