<?php
namespace  Ksyun\Client\Milvus\V20231010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**String**/
        "IpVersion" => null,
         /**String**/
        "Detail" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Rules = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            if(is_bool($param["IpVersion"])){
                $this->RequestParams["IpVersion"] = $param["IpVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["IpVersion"] = $param["IpVersion"];
            }
        }
        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            if(is_bool($param["Detail"])){
                $this->RequestParams["Detail"] = $param["Detail"] ? "true" : "false";
            } else {
                $this->RequestParams["Detail"] = $param["Detail"];
            }
        }
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $res = $this->formatFilterParams("Rules",$param["Rules"]);
            $this->_unserialize("Rules",$res);
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