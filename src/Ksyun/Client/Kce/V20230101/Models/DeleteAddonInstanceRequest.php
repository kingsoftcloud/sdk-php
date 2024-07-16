<?php
namespace  Ksyun\Client\Kce\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteAddonInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterName" => null,
         /**String**/
        "ClusterId" => null,
         /**String**/
        "AddonId" => null,
         /**String**/
        "InstanceId" => null,
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            if(is_bool($param["ClusterName"])){
                $this->RequestParams["ClusterName"] = $param["ClusterName"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterName"] = $param["ClusterName"];
            }
        }
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("AddonId",$param) and $param["AddonId"] !== null) {
            if(is_bool($param["AddonId"])){
                $this->RequestParams["AddonId"] = $param["AddonId"] ? "true" : "false";
            } else {
                $this->RequestParams["AddonId"] = $param["AddonId"];
            }
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            if(is_bool($param["InstanceId"])){
                $this->RequestParams["InstanceId"] = $param["InstanceId"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceId"] = $param["InstanceId"];
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