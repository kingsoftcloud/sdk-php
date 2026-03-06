<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSnapshotPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AutoSnapshotPolicyName" => null,
         /**String**/
        "FrequencyUnit" => null,
         /**Int**/
        "AliveDays" => null,
    ];

     /**特殊参数类型:Filter**/
    public $IndexOfFrequency = [];
      /**特殊参数类型:Filter**/
    public $SnapshotTimePoint = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            if(is_bool($param["AutoSnapshotPolicyName"])){
                $this->RequestParams["AutoSnapshotPolicyName"] = $param["AutoSnapshotPolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotPolicyName"] = $param["AutoSnapshotPolicyName"];
            }
        }
        if (array_key_exists("FrequencyUnit",$param) and $param["FrequencyUnit"] !== null) {
            if(is_bool($param["FrequencyUnit"])){
                $this->RequestParams["FrequencyUnit"] = $param["FrequencyUnit"] ? "true" : "false";
            } else {
                $this->RequestParams["FrequencyUnit"] = $param["FrequencyUnit"];
            }
        }
        if (array_key_exists("IndexOfFrequency",$param) and $param["IndexOfFrequency"] !== null) {
            $res = $this->formatFilterParams("IndexOfFrequency",$param["IndexOfFrequency"]);
            $this->_unserialize("IndexOfFrequency",$res);
        }
        if (array_key_exists("SnapshotTimePoint",$param) and $param["SnapshotTimePoint"] !== null) {
            $res = $this->formatFilterParams("SnapshotTimePoint",$param["SnapshotTimePoint"]);
            $this->_unserialize("SnapshotTimePoint",$res);
        }
        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            if(is_bool($param["AliveDays"])){
                $this->RequestParams["AliveDays"] = $param["AliveDays"] ? "true" : "false";
            } else {
                $this->RequestParams["AliveDays"] = $param["AliveDays"];
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