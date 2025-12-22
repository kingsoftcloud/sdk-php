<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyPdnsFdZoneRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FdZoneId" => null,
         /**String**/
        "Description" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ForwardIp = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FdZoneId",$param) and $param["FdZoneId"] !== null) {
            if(is_bool($param["FdZoneId"])){
                $this->RequestParams["FdZoneId"] = $param["FdZoneId"] ? "true" : "false";
            } else {
                $this->RequestParams["FdZoneId"] = $param["FdZoneId"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("ForwardIp",$param) and $param["ForwardIp"] !== null) {
            $res = $this->formatFilterParams("ForwardIp",$param["ForwardIp"]);
            $this->_unserialize("ForwardIp",$res);
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