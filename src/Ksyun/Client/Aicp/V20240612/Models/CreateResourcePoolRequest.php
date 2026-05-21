<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateResourcePoolRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourcePoolName" => null,
         /**String**/
        "Description" => null,
         /**String**/
        "VpcId" => null,
         /**String**/
        "ResourcePoolType" => null,
         /**String**/
        "ClusterId" => null,
         /**Boolean**/
        "EnableKPFSPerformance" => null,
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "EnableKlog" => null,
         /**String**/
        "LogProjectName" => null,
         /**Boolean**/
        "Overallocate" => null,
         /**Array**/
        "Components" => null,
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
        if (array_key_exists("ResourcePoolName",$param) and $param["ResourcePoolName"] !== null) {
            if(is_bool($param["ResourcePoolName"])){
                $this->RequestParams["ResourcePoolName"] = $param["ResourcePoolName"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolName"] = $param["ResourcePoolName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("ResourcePoolType",$param) and $param["ResourcePoolType"] !== null) {
            if(is_bool($param["ResourcePoolType"])){
                $this->RequestParams["ResourcePoolType"] = $param["ResourcePoolType"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolType"] = $param["ResourcePoolType"];
            }
        }
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("EnableKPFSPerformance",$param) and $param["EnableKPFSPerformance"] !== null) {
            if(is_bool($param["EnableKPFSPerformance"])){
                $this->RequestParams["EnableKPFSPerformance"] = $param["EnableKPFSPerformance"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableKPFSPerformance"] = $param["EnableKPFSPerformance"];
            }
        }
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
            }
        }
        if (array_key_exists("EnableKlog",$param) and $param["EnableKlog"] !== null) {
            if(is_bool($param["EnableKlog"])){
                $this->RequestParams["EnableKlog"] = $param["EnableKlog"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableKlog"] = $param["EnableKlog"];
            }
        }
        if (array_key_exists("LogProjectName",$param) and $param["LogProjectName"] !== null) {
            if(is_bool($param["LogProjectName"])){
                $this->RequestParams["LogProjectName"] = $param["LogProjectName"] ? "true" : "false";
            } else {
                $this->RequestParams["LogProjectName"] = $param["LogProjectName"];
            }
        }
        if (array_key_exists("Overallocate",$param) and $param["Overallocate"] !== null) {
            if(is_bool($param["Overallocate"])){
                $this->RequestParams["Overallocate"] = $param["Overallocate"] ? "true" : "false";
            } else {
                $this->RequestParams["Overallocate"] = $param["Overallocate"];
            }
        }
        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            if(is_bool($param["Components"])){
                $this->RequestParams["Components"] = $param["Components"] ? "true" : "false";
            } else {
                $this->RequestParams["Components"] = $param["Components"];
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