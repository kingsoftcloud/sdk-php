<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDedicatedBlockStorageClustersRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "DbscName" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "MaxResults" => null,
         /**String**/
        "DbscCreateDate" => null,
    ];

     /**特殊参数类型:Filter**/
    public $DbscId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("DbscName",$param) and $param["DbscName"] !== null) {
            if(is_bool($param["DbscName"])){
                $this->RequestParams["DbscName"] = $param["DbscName"] ? "true" : "false";
            } else {
                $this->RequestParams["DbscName"] = $param["DbscName"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("DbscCreateDate",$param) and $param["DbscCreateDate"] !== null) {
            if(is_bool($param["DbscCreateDate"])){
                $this->RequestParams["DbscCreateDate"] = $param["DbscCreateDate"] ? "true" : "false";
            } else {
                $this->RequestParams["DbscCreateDate"] = $param["DbscCreateDate"];
            }
        }
        if (array_key_exists("DbscId",$param) and $param["DbscId"] !== null) {
            $res = $this->formatFilterParams("DbscId",$param["DbscId"]);
            $this->_unserialize("DbscId",$res);
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