<?php
namespace  Ksyun\Client\Kce\V20201231\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterName" => null,
         /**String**/
        "ClusterType" => null,
         /**String**/
        "ClusterManageMode" => null,
         /**String**/
        "ClusterDesc" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "PodCidr" => null,
         /**String**/
        "ServiceCidr" => null,
         /**String**/
        "NetworkType" => null,
         /**String**/
        "K8sVersion" => null,
         /**String**/
        "ReserveSubnetId" => null,
         /**String**/
        "PublicApiServer" => null,
         /**String**/
        "MaxPodPerNode" => null,
         /**Boolean**/
        "MasterEtcdSeparate" => null,
         /**Object**/
        "ControlPlaneLog" => null,
         /**Object**/
        "ServerlessClusterMaster" => null,
         /**Boolean**/
        "ExposePublicApiServer" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ManagedClusterMultiMaster = [];
      /**特殊参数类型:Filter**/
    public $InstanceForNode = [];
      /**特殊参数类型:Filter**/
    public $ExistedInstanceForEpc = [];
      /**特殊参数类型:Filter**/
    public $Component = [];
 
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            if(is_bool($param["ClusterType"])){
                $this->RequestParams["ClusterType"] = $param["ClusterType"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterType"] = $param["ClusterType"];
            }
        }
        if (array_key_exists("ClusterManageMode",$param) and $param["ClusterManageMode"] !== null) {
            if(is_bool($param["ClusterManageMode"])){
                $this->RequestParams["ClusterManageMode"] = $param["ClusterManageMode"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterManageMode"] = $param["ClusterManageMode"];
            }
        }
        if (array_key_exists("ClusterDesc",$param) and $param["ClusterDesc"] !== null) {
            if(is_bool($param["ClusterDesc"])){
                $this->RequestParams["ClusterDesc"] = $param["ClusterDesc"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterDesc"] = $param["ClusterDesc"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("PodCidr",$param) and $param["PodCidr"] !== null) {
            if(is_bool($param["PodCidr"])){
                $this->RequestParams["PodCidr"] = $param["PodCidr"] ? "true" : "false";
            } else {
                $this->RequestParams["PodCidr"] = $param["PodCidr"];
            }
        }
        if (array_key_exists("ServiceCidr",$param) and $param["ServiceCidr"] !== null) {
            if(is_bool($param["ServiceCidr"])){
                $this->RequestParams["ServiceCidr"] = $param["ServiceCidr"] ? "true" : "false";
            } else {
                $this->RequestParams["ServiceCidr"] = $param["ServiceCidr"];
            }
        }
        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            if(is_bool($param["NetworkType"])){
                $this->RequestParams["NetworkType"] = $param["NetworkType"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkType"] = $param["NetworkType"];
            }
        }
        if (array_key_exists("K8sVersion",$param) and $param["K8sVersion"] !== null) {
            if(is_bool($param["K8sVersion"])){
                $this->RequestParams["K8sVersion"] = $param["K8sVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["K8sVersion"] = $param["K8sVersion"];
            }
        }
        if (array_key_exists("ReserveSubnetId",$param) and $param["ReserveSubnetId"] !== null) {
            if(is_bool($param["ReserveSubnetId"])){
                $this->RequestParams["ReserveSubnetId"] = $param["ReserveSubnetId"] ? "true" : "false";
            } else {
                $this->RequestParams["ReserveSubnetId"] = $param["ReserveSubnetId"];
            }
        }
        if (array_key_exists("PublicApiServer",$param) and $param["PublicApiServer"] !== null) {
            if(is_bool($param["PublicApiServer"])){
                $this->RequestParams["PublicApiServer"] = $param["PublicApiServer"] ? "true" : "false";
            } else {
                $this->RequestParams["PublicApiServer"] = $param["PublicApiServer"];
            }
        }
        if (array_key_exists("MaxPodPerNode",$param) and $param["MaxPodPerNode"] !== null) {
            if(is_bool($param["MaxPodPerNode"])){
                $this->RequestParams["MaxPodPerNode"] = $param["MaxPodPerNode"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxPodPerNode"] = $param["MaxPodPerNode"];
            }
        }
        if (array_key_exists("MasterEtcdSeparate",$param) and $param["MasterEtcdSeparate"] !== null) {
            if(is_bool($param["MasterEtcdSeparate"])){
                $this->RequestParams["MasterEtcdSeparate"] = $param["MasterEtcdSeparate"] ? "true" : "false";
            } else {
                $this->RequestParams["MasterEtcdSeparate"] = $param["MasterEtcdSeparate"];
            }
        }
        if (array_key_exists("ManagedClusterMultiMaster",$param) and $param["ManagedClusterMultiMaster"] !== null) {
            $res = $this->formatFilterParams("ManagedClusterMultiMaster",$param["ManagedClusterMultiMaster"]);
            $this->_unserialize("ManagedClusterMultiMaster",$res);
        }
        if (array_key_exists("InstanceForNode",$param) and $param["InstanceForNode"] !== null) {
            $res = $this->formatFilterParams("InstanceForNode",$param["InstanceForNode"]);
            $this->_unserialize("InstanceForNode",$res);
        }
        if (array_key_exists("ExistedInstanceForEpc",$param) and $param["ExistedInstanceForEpc"] !== null) {
            $res = $this->formatFilterParams("ExistedInstanceForEpc",$param["ExistedInstanceForEpc"]);
            $this->_unserialize("ExistedInstanceForEpc",$res);
        }
        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $res = $this->formatFilterParams("Component",$param["Component"]);
            $this->_unserialize("Component",$res);
        }
        if (array_key_exists("ControlPlaneLog",$param) and $param["ControlPlaneLog"] !== null) {
            if(is_bool($param["ControlPlaneLog"])){
                $this->RequestParams["ControlPlaneLog"] = $param["ControlPlaneLog"] ? "true" : "false";
            } else {
                $this->RequestParams["ControlPlaneLog"] = $param["ControlPlaneLog"];
            }
        }
        if (array_key_exists("ServerlessClusterMaster",$param) and $param["ServerlessClusterMaster"] !== null) {
            if(is_bool($param["ServerlessClusterMaster"])){
                $this->RequestParams["ServerlessClusterMaster"] = $param["ServerlessClusterMaster"] ? "true" : "false";
            } else {
                $this->RequestParams["ServerlessClusterMaster"] = $param["ServerlessClusterMaster"];
            }
        }
        if (array_key_exists("ExposePublicApiServer",$param) and $param["ExposePublicApiServer"] !== null) {
            if(is_bool($param["ExposePublicApiServer"])){
                $this->RequestParams["ExposePublicApiServer"] = $param["ExposePublicApiServer"] ? "true" : "false";
            } else {
                $this->RequestParams["ExposePublicApiServer"] = $param["ExposePublicApiServer"];
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