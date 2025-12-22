<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteHostHeaderRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "HostHeaderId" => null,
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
        if (array_key_exists("HostHeaderId",$param) and $param["HostHeaderId"] !== null) {
            if(is_bool($param["HostHeaderId"])){
                $this->RequestParams["HostHeaderId"] = $param["HostHeaderId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostHeaderId"] = $param["HostHeaderId"];
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