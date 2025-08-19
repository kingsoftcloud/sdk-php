<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class BatchCreateProcessRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AvailabilityZone" => null,
         /**String**/
        "Attribute" => null,
         /**String**/
        "Content" => null,
         /**Int**/
        "MachineCount" => null,
         /**String**/
        "Title" => null,
         /**String**/
        "Type" => null,
         /**String**/
        "Confirm" => null,
         /**Int**/
        "ProcessSource" => null,
         /**Int**/
        "AutoNocCase" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceId = [];
      /**特殊参数类型:Filter**/
    public $LogFileName = [];
      /**特殊参数类型:Filter**/
    public $LogFile = [];
      /**特殊参数类型:Filter**/
    public $LogUrl = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $res = $this->formatFilterParams("InstanceId",$param["InstanceId"]);
            $this->_unserialize("InstanceId",$res);
        }
        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            if(is_bool($param["AvailabilityZone"])){
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"] ? "true" : "false";
            } else {
                $this->RequestParams["AvailabilityZone"] = $param["AvailabilityZone"];
            }
        }
        if (array_key_exists("Attribute",$param) and $param["Attribute"] !== null) {
            if(is_bool($param["Attribute"])){
                $this->RequestParams["Attribute"] = $param["Attribute"] ? "true" : "false";
            } else {
                $this->RequestParams["Attribute"] = $param["Attribute"];
            }
        }
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            if(is_bool($param["Content"])){
                $this->RequestParams["Content"] = $param["Content"] ? "true" : "false";
            } else {
                $this->RequestParams["Content"] = $param["Content"];
            }
        }
        if (array_key_exists("LogFileName",$param) and $param["LogFileName"] !== null) {
            $res = $this->formatFilterParams("LogFileName",$param["LogFileName"]);
            $this->_unserialize("LogFileName",$res);
        }
        if (array_key_exists("LogFile",$param) and $param["LogFile"] !== null) {
            $res = $this->formatFilterParams("LogFile",$param["LogFile"]);
            $this->_unserialize("LogFile",$res);
        }
        if (array_key_exists("LogUrl",$param) and $param["LogUrl"] !== null) {
            $res = $this->formatFilterParams("LogUrl",$param["LogUrl"]);
            $this->_unserialize("LogUrl",$res);
        }
        if (array_key_exists("MachineCount",$param) and $param["MachineCount"] !== null) {
            if(is_bool($param["MachineCount"])){
                $this->RequestParams["MachineCount"] = $param["MachineCount"] ? "true" : "false";
            } else {
                $this->RequestParams["MachineCount"] = $param["MachineCount"];
            }
        }
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            if(is_bool($param["Title"])){
                $this->RequestParams["Title"] = $param["Title"] ? "true" : "false";
            } else {
                $this->RequestParams["Title"] = $param["Title"];
            }
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            if(is_bool($param["Type"])){
                $this->RequestParams["Type"] = $param["Type"] ? "true" : "false";
            } else {
                $this->RequestParams["Type"] = $param["Type"];
            }
        }
        if (array_key_exists("Confirm",$param) and $param["Confirm"] !== null) {
            if(is_bool($param["Confirm"])){
                $this->RequestParams["Confirm"] = $param["Confirm"] ? "true" : "false";
            } else {
                $this->RequestParams["Confirm"] = $param["Confirm"];
            }
        }
        if (array_key_exists("ProcessSource",$param) and $param["ProcessSource"] !== null) {
            if(is_bool($param["ProcessSource"])){
                $this->RequestParams["ProcessSource"] = $param["ProcessSource"] ? "true" : "false";
            } else {
                $this->RequestParams["ProcessSource"] = $param["ProcessSource"];
            }
        }
        if (array_key_exists("AutoNocCase",$param) and $param["AutoNocCase"] !== null) {
            if(is_bool($param["AutoNocCase"])){
                $this->RequestParams["AutoNocCase"] = $param["AutoNocCase"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoNocCase"] = $param["AutoNocCase"];
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