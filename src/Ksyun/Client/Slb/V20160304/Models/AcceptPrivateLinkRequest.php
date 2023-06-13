<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;

class AcceptPrivateLinkRequest extends BaseModel
{
    public $RequestParams = [
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