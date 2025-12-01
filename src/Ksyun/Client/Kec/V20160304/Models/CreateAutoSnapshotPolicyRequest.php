<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateAutoSnapshotPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AutoSnapshotPolicyName" => null,
         /**String**/
        "AutoSnapshotTime" => null,
         /**String**/
        "SnapshotType" => null,
         /**Int**/
        "RetentionTime" => null,
    ];

     /**特殊参数类型:Filter**/
    public $AutoSnapshotDate = [];
 
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
        if (array_key_exists("AutoSnapshotTime",$param) and $param["AutoSnapshotTime"] !== null) {
            if(is_bool($param["AutoSnapshotTime"])){
                $this->RequestParams["AutoSnapshotTime"] = $param["AutoSnapshotTime"] ? "true" : "false";
            } else {
                $this->RequestParams["AutoSnapshotTime"] = $param["AutoSnapshotTime"];
            }
        }
        if (array_key_exists("AutoSnapshotDate",$param) and $param["AutoSnapshotDate"] !== null) {
            $res = $this->formatFilterParams("AutoSnapshotDate",$param["AutoSnapshotDate"]);
            $this->_unserialize("AutoSnapshotDate",$res);
        }
        if (array_key_exists("SnapshotType",$param) and $param["SnapshotType"] !== null) {
            if(is_bool($param["SnapshotType"])){
                $this->RequestParams["SnapshotType"] = $param["SnapshotType"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotType"] = $param["SnapshotType"];
            }
        }
        if (array_key_exists("RetentionTime",$param) and $param["RetentionTime"] !== null) {
            if(is_bool($param["RetentionTime"])){
                $this->RequestParams["RetentionTime"] = $param["RetentionTime"] ? "true" : "false";
            } else {
                $this->RequestParams["RetentionTime"] = $param["RetentionTime"];
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