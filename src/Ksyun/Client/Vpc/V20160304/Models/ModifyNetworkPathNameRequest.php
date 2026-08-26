<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyNetworkPathNameRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "PathId" => null,
         /**String**/
        "PathName" => null,
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
        if (array_key_exists("PathId",$param) and $param["PathId"] !== null) {
            if(is_bool($param["PathId"])){
                $this->RequestParams["PathId"] = $param["PathId"] ? "true" : "false";
            } else {
                $this->RequestParams["PathId"] = $param["PathId"];
            }
        }
        if (array_key_exists("PathName",$param) and $param["PathName"] !== null) {
            if(is_bool($param["PathName"])){
                $this->RequestParams["PathName"] = $param["PathName"] ? "true" : "false";
            } else {
                $this->RequestParams["PathName"] = $param["PathName"];
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