<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyVolumeTypeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VolumeId" => null,
         /**String**/
        "PerformanceVolumeSize" => null,
         /**String**/
        "PerformanceLevelVolumeCategory" => null,
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
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            if(is_bool($param["VolumeId"])){
                $this->RequestParams["VolumeId"] = $param["VolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeId"] = $param["VolumeId"];
            }
        }
        if (array_key_exists("PerformanceVolumeSize",$param) and $param["PerformanceVolumeSize"] !== null) {
            if(is_bool($param["PerformanceVolumeSize"])){
                $this->RequestParams["PerformanceVolumeSize"] = $param["PerformanceVolumeSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PerformanceVolumeSize"] = $param["PerformanceVolumeSize"];
            }
        }
        if (array_key_exists("PerformanceLevelVolumeCategory",$param) and $param["PerformanceLevelVolumeCategory"] !== null) {
            if(is_bool($param["PerformanceLevelVolumeCategory"])){
                $this->RequestParams["PerformanceLevelVolumeCategory"] = $param["PerformanceLevelVolumeCategory"] ? "true" : "false";
            } else {
                $this->RequestParams["PerformanceLevelVolumeCategory"] = $param["PerformanceLevelVolumeCategory"];
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