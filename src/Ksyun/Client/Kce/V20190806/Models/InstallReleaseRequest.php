<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class InstallReleaseRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "Namespace" => null,
         /**String**/
        "ReleaseName" => null,
         /**String**/
        "ChartSource" => null,
         /**String**/
        "ChartNamespace" => null,
         /**String**/
        "ChartName" => null,
         /**String**/
        "ChartVersion" => null,
         /**String**/
        "ChartUrl" => null,
         /**String**/
        "ChartRepoType" => null,
         /**String**/
        "ChartRepoUsername" => null,
         /**String**/
        "ChartRepoPassword" => null,
         /**String**/
        "Values" => null,
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            if(is_bool($param["ClusterId"])){
                $this->RequestParams["ClusterId"] = $param["ClusterId"] ? "true" : "false";
            } else {
                $this->RequestParams["ClusterId"] = $param["ClusterId"];
            }
        }
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("ReleaseName",$param) and $param["ReleaseName"] !== null) {
            if(is_bool($param["ReleaseName"])){
                $this->RequestParams["ReleaseName"] = $param["ReleaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["ReleaseName"] = $param["ReleaseName"];
            }
        }
        if (array_key_exists("ChartSource",$param) and $param["ChartSource"] !== null) {
            if(is_bool($param["ChartSource"])){
                $this->RequestParams["ChartSource"] = $param["ChartSource"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartSource"] = $param["ChartSource"];
            }
        }
        if (array_key_exists("ChartNamespace",$param) and $param["ChartNamespace"] !== null) {
            if(is_bool($param["ChartNamespace"])){
                $this->RequestParams["ChartNamespace"] = $param["ChartNamespace"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartNamespace"] = $param["ChartNamespace"];
            }
        }
        if (array_key_exists("ChartName",$param) and $param["ChartName"] !== null) {
            if(is_bool($param["ChartName"])){
                $this->RequestParams["ChartName"] = $param["ChartName"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartName"] = $param["ChartName"];
            }
        }
        if (array_key_exists("ChartVersion",$param) and $param["ChartVersion"] !== null) {
            if(is_bool($param["ChartVersion"])){
                $this->RequestParams["ChartVersion"] = $param["ChartVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartVersion"] = $param["ChartVersion"];
            }
        }
        if (array_key_exists("ChartUrl",$param) and $param["ChartUrl"] !== null) {
            if(is_bool($param["ChartUrl"])){
                $this->RequestParams["ChartUrl"] = $param["ChartUrl"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartUrl"] = $param["ChartUrl"];
            }
        }
        if (array_key_exists("ChartRepoType",$param) and $param["ChartRepoType"] !== null) {
            if(is_bool($param["ChartRepoType"])){
                $this->RequestParams["ChartRepoType"] = $param["ChartRepoType"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartRepoType"] = $param["ChartRepoType"];
            }
        }
        if (array_key_exists("ChartRepoUsername",$param) and $param["ChartRepoUsername"] !== null) {
            if(is_bool($param["ChartRepoUsername"])){
                $this->RequestParams["ChartRepoUsername"] = $param["ChartRepoUsername"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartRepoUsername"] = $param["ChartRepoUsername"];
            }
        }
        if (array_key_exists("ChartRepoPassword",$param) and $param["ChartRepoPassword"] !== null) {
            if(is_bool($param["ChartRepoPassword"])){
                $this->RequestParams["ChartRepoPassword"] = $param["ChartRepoPassword"] ? "true" : "false";
            } else {
                $this->RequestParams["ChartRepoPassword"] = $param["ChartRepoPassword"];
            }
        }
        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            if(is_bool($param["Values"])){
                $this->RequestParams["Values"] = $param["Values"] ? "true" : "false";
            } else {
                $this->RequestParams["Values"] = $param["Values"];
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