<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeGpuRoceTopologyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SpineName" => null,
         /**String**/
        "LeafName" => null,
         /**String**/
        "HostId" => null,
         /**String**/
        "Sn" => null,
         /**String**/
        "RoceCluster" => null,
         /**String**/
        "SRoceCluster" => null,
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
        if (array_key_exists("SpineName",$param) and $param["SpineName"] !== null) {
            if(is_bool($param["SpineName"])){
                $this->RequestParams["SpineName"] = $param["SpineName"] ? "true" : "false";
            } else {
                $this->RequestParams["SpineName"] = $param["SpineName"];
            }
        }
        if (array_key_exists("LeafName",$param) and $param["LeafName"] !== null) {
            if(is_bool($param["LeafName"])){
                $this->RequestParams["LeafName"] = $param["LeafName"] ? "true" : "false";
            } else {
                $this->RequestParams["LeafName"] = $param["LeafName"];
            }
        }
        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            if(is_bool($param["HostId"])){
                $this->RequestParams["HostId"] = $param["HostId"] ? "true" : "false";
            } else {
                $this->RequestParams["HostId"] = $param["HostId"];
            }
        }
        if (array_key_exists("Sn",$param) and $param["Sn"] !== null) {
            if(is_bool($param["Sn"])){
                $this->RequestParams["Sn"] = $param["Sn"] ? "true" : "false";
            } else {
                $this->RequestParams["Sn"] = $param["Sn"];
            }
        }
        if (array_key_exists("RoceCluster",$param) and $param["RoceCluster"] !== null) {
            if(is_bool($param["RoceCluster"])){
                $this->RequestParams["RoceCluster"] = $param["RoceCluster"] ? "true" : "false";
            } else {
                $this->RequestParams["RoceCluster"] = $param["RoceCluster"];
            }
        }
        if (array_key_exists("SRoceCluster",$param) and $param["SRoceCluster"] !== null) {
            if(is_bool($param["SRoceCluster"])){
                $this->RequestParams["SRoceCluster"] = $param["SRoceCluster"] ? "true" : "false";
            } else {
                $this->RequestParams["SRoceCluster"] = $param["SRoceCluster"];
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