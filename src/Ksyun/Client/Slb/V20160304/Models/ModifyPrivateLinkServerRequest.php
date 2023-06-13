<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyPrivateLinkServerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PrivateLinkServerId" => null,
         /**String**/
        "PrivateLinkServerName" => null,
         /**String**/
        "Description" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PrivateLinkServerId",$param) and $param["PrivateLinkServerId"] !== null) {
            if(is_bool($param["PrivateLinkServerId"])){
                $this->RequestParams["PrivateLinkServerId"] = $param["PrivateLinkServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateLinkServerId"] = $param["PrivateLinkServerId"];
            }
        }
        if (array_key_exists("PrivateLinkServerName",$param) and $param["PrivateLinkServerName"] !== null) {
            if(is_bool($param["PrivateLinkServerName"])){
                $this->RequestParams["PrivateLinkServerName"] = $param["PrivateLinkServerName"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateLinkServerName"] = $param["PrivateLinkServerName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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