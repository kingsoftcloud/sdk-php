<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class BindFdZoneVpcRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FdZoneId" => null,
         /**String**/
        "RegionName" => null,
    ];

     /**特殊参数类型:Filter**/
    public $VpcId = [];
 
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
        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            if(is_bool($param["RegionName"])){
                $this->RequestParams["RegionName"] = $param["RegionName"] ? "true" : "false";
            } else {
                $this->RequestParams["RegionName"] = $param["RegionName"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $res = $this->formatFilterParams("VpcId",$param["VpcId"]);
            $this->_unserialize("VpcId",$res);
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