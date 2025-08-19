<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyHyperThreadingRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "HostId" => null,
         /**String**/
        "HyperThreadingStatus" => null,
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
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            if(is_bool($param["HostId"])){
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("HyperThreadingStatus",$param) and $param["HyperThreadingStatus"] !== null) {
            if(is_bool($param["HyperThreadingStatus"])){
                $this->RequestParams["HyperThreadingStatus"] = $param["HyperThreadingStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["HyperThreadingStatus"] = $param["HyperThreadingStatus"];
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