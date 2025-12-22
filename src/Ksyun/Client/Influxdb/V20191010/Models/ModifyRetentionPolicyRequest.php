<?php
namespace  Ksyun\Client\Influxdb\V20191010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyRetentionPolicyRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "DatabaseName" => null,
         /**String**/
        "PolicyName" => null,
         /**String**/
        "Duration" => null,
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
            }
        }
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            if(is_bool($param["DatabaseName"])){
                $this->RequestParams["DatabaseName"] = $param["DatabaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseName"] = $param["DatabaseName"];
            }
        }
        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            if(is_bool($param["PolicyName"])){
                $this->RequestParams["PolicyName"] = $param["PolicyName"] ? "true" : "false";
            } else {
                $this->RequestParams["PolicyName"] = $param["PolicyName"];
            }
        }
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            if(is_bool($param["Duration"])){
                $this->RequestParams["Duration"] = $param["Duration"] ? "true" : "false";
            } else {
                $this->RequestParams["Duration"] = $param["Duration"];
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