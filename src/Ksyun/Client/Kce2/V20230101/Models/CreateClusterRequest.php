<?php
namespace  Ksyun\Client\Kce2\V20230101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterName" => null,
         /**String**/
        "ClusterDesc" => null,
         /**String**/
        "ClusterManageMode" => null,
         /**String**/
        "ProjectId" => null,
         /**String**/
        "KubernetesVersion" => null,
         /**Object**/
        "Network" => null,
         /**Array**/
        "NodeInstanceSet" => null,
         /**Array**/
        "Addons" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
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
        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            if(is_bool($param["ClusterDesc"])){
                $this->RequestParams["ClusterDesc"] = $param["ClusterDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterDesc"] = $param["ClusterDesc"];
            }
        }
        if (array_key_exists("ClusterManageMode",$param) and $param["ClusterManageMode"] !== null) {
            if(is_bool($param["ClusterManageMode"])){
                $this->RequestParams["ClusterManageMode"] = $param["ClusterManageMode"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterManageMode"] = $param["ClusterManageMode"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("KubernetesVersion",$param) and $param["KubernetesVersion"] !== null) {
            if(is_bool($param["KubernetesVersion"])){
                $this->RequestParams["KubernetesVersion"] = $param["KubernetesVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["KubernetesVersion"] = $param["KubernetesVersion"];
            }
        }
        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            if(is_bool($param["Network"])){
                $this->RequestParams["Network"] = $param["Network"] ? "true" : "false";
            } else {
                $this->RequestParams["Network"] = $param["Network"];
            }
        }
        if (array_key_exists("NodeInstanceSet",$param) and $param["NodeInstanceSet"] !== null) {
            if(is_bool($param["NodeInstanceSet"])){
                $this->RequestParams["NodeInstanceSet"] = $param["NodeInstanceSet"] ? "true" : "false";
            } else {
                $this->RequestParams["NodeInstanceSet"] = $param["NodeInstanceSet"];
            }
        }
        if (array_key_exists("Addons",$param) and $param["Addons"] !== null) {
            if(is_bool($param["Addons"])){
                $this->RequestParams["Addons"] = $param["Addons"] ? "true" : "false";
            } else {
                $this->RequestParams["Addons"] = $param["Addons"];
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