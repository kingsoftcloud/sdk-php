<?php
namespace  Ksyun\Client\Pdns\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateEndPointRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "EndPointName" => null,
         /**String**/
        "Region" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "Description" => null,
    ];

     /**特殊参数类型:Filter**/
    public $IpConfig = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            if(is_bool($param["EndPointName"])){
                $this->RequestParams["EndPointName"] = $param["EndPointName"] ? "true" : "false";
            } else {
                $this->RequestParams["EndPointName"] = $param["EndPointName"];
            }
        }
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            if(is_bool($param["Region"])){
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("IpConfig",$param) and $param["IpConfig"] !== null) {
            $res = $this->formatFilterParams("IpConfig",$param["IpConfig"]);
            $this->_unserialize("IpConfig",$res);
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