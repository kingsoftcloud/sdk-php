<?php
namespace  Ksyun\Client\Kmr\V20210902\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class LaunchClusterRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterName" => null,
         /**String**/
        "Distribution" => null,
         /**String**/
        "MainVersion" => null,
         /**String**/
        "ChargeType" => null,
         /**Object**/
        "DatabaseInfo" => null,
         /**Array**/
        "Services" => null,
         /**Int**/
        "ProjectId" => null,
         /**String**/
        "VpcDomainId" => null,
         /**String**/
        "SecurityGroupId" => null,
         /**Array**/
        "InstanceGroups" => null,
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
        if (array_key_exists("Distribution",$param) and $param["Distribution"] !== null) {
            if(is_bool($param["Distribution"])){
                $this->RequestParams["Distribution"] = $param["Distribution"] ? "true" : "false";
            } else {
                $this->RequestParams["Distribution"] = $param["Distribution"];
            }
        }
        if (array_key_exists("MainVersion",$param) and $param["MainVersion"] !== null) {
            if(is_bool($param["MainVersion"])){
                $this->RequestParams["MainVersion"] = $param["MainVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["MainVersion"] = $param["MainVersion"];
            }
        }
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            if(is_bool($param["ChargeType"])){
                $this->RequestParams["ChargeType"] = $param["ChargeType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChargeType"] = $param["ChargeType"];
            }
        }
        if (array_key_exists("DatabaseInfo",$param) and $param["DatabaseInfo"] !== null) {
            if(is_bool($param["DatabaseInfo"])){
                $this->RequestParams["DatabaseInfo"] = $param["DatabaseInfo"] ? "true" : "false";
            } else {
                $this->RequestParams["DatabaseInfo"] = $param["DatabaseInfo"];
            }
        }
        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            if(is_bool($param["Services"])){
                $this->RequestParams["Services"] = $param["Services"] ? "true" : "false";
            } else {
                $this->RequestParams["Services"] = $param["Services"];
            }
        }
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            if(is_bool($param["ProjectId"])){
                $this->RequestParams["ProjectId"] = $param["ProjectId"] ? "true" : "false";
            } else {
                $this->RequestParams["ProjectId"] = $param["ProjectId"];
            }
        }
        if (array_key_exists("VpcDomainId",$param) and $param["VpcDomainId"] !== null) {
            if(is_bool($param["VpcDomainId"])){
                $this->RequestParams["VpcDomainId"] = $param["VpcDomainId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcDomainId"] = $param["VpcDomainId"];
            }
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("InstanceGroups",$param) and $param["InstanceGroups"] !== null) {
            if(is_bool($param["InstanceGroups"])){
                $this->RequestParams["InstanceGroups"] = $param["InstanceGroups"] ? "true" : "false";
            } else {
                $this->RequestParams["InstanceGroups"] = $param["InstanceGroups"];
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