<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CloudDeskgetDesktopUrlRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "token" => null,
         /**String**/
        "instanceId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("token",$param) and $param["token"] !== null) {
            if(is_bool($param["token"])){
                $this->RequestParams["token"] = $param["token"] ? "true" : "false";
            } else {
                $this->RequestParams["token"] = $param["token"];
            }
        }
        if (array_key_exists("instanceId",$param) and $param["instanceId"] !== null) {
            if(is_bool($param["instanceId"])){
                $this->RequestParams["instanceId"] = $param["instanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["instanceId"] = $param["instanceId"];
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