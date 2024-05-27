<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeregisterAlbBackendServerRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BackendServerId" => null,
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
        if (array_key_exists("BackendServerId",$param) and $param["BackendServerId"] !== null) {
            if(is_bool($param["BackendServerId"])){
                $this->RequestParams["BackendServerId"] = $param["BackendServerId"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerId"] = $param["BackendServerId"];
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