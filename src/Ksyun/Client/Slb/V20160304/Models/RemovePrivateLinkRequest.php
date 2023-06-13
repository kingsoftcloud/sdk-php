<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class RemovePrivateLinkRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PrivateLinkServerId" => null,
         /**String**/
        "PrivateLinkId" => null,
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
        if (array_key_exists("PrivateLinkId",$param) and $param["PrivateLinkId"] !== null) {
            if(is_bool($param["PrivateLinkId"])){
                $this->RequestParams["PrivateLinkId"] = $param["PrivateLinkId"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateLinkId"] = $param["PrivateLinkId"];
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