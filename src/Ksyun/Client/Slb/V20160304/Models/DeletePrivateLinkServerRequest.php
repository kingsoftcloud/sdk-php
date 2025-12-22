<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeletePrivateLinkServerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PrivateLinkServerId" => null,
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
        if (array_key_exists("PrivateLinkServerId",$param) and $param["PrivateLinkServerId"] !== null) {
            if(is_bool($param["PrivateLinkServerId"])){
                $this->RequestParams["PrivateLinkServerId"] = $param["PrivateLinkServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["PrivateLinkServerId"] = $param["PrivateLinkServerId"];
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