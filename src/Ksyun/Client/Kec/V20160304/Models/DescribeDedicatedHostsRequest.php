<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DescribeDedicatedHostsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DedicatedHostId" => null,
         /**String**/
        "search" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ProjectId = [];
 
    public function __construct()
    {

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
        if (array_key_exists("search",$param) and $param["search"] !== null) {
            if(is_bool($param["search"])){
                $this->RequestParams["search"] = $param["search"] ? "true" : "false";
            } else {
                $this->RequestParams["search"] = $param["search"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $res = $this->formatFilterParams("ProjectId",$param["ProjectId"]);
            $this->_unserialize("ProjectId",$res);
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