<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RenameDedicatedHostRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DedicatedHostId" => null,
         /**String**/
        "NewDedicatedHostName" => null,
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
        if (array_key_exists("DedicatedHostId",$param) and $param["DedicatedHostId"] !== null) {
            if(is_bool($param["DedicatedHostId"])){
                $this->RequestParams["DedicatedHostId"] = $param["DedicatedHostId"] ? "true" : "false";
            } else {
                $this->RequestParams["DedicatedHostId"] = $param["DedicatedHostId"];
            }
        }
        if (array_key_exists("NewDedicatedHostName",$param) and $param["NewDedicatedHostName"] !== null) {
            if(is_bool($param["NewDedicatedHostName"])){
                $this->RequestParams["NewDedicatedHostName"] = $param["NewDedicatedHostName"] ? "true" : "false";
            } else {
                $this->RequestParams["NewDedicatedHostName"] = $param["NewDedicatedHostName"];
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