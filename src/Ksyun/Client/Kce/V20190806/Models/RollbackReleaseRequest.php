<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RollbackReleaseRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ClusterId" => null,
         /**String**/
        "ReleaseName" => null,
         /**String**/
        "Namespace" => null,
         /**Int**/
        "ReleaseVersion" => null,
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
        if (array_key_exists("ReleaseName",$param) and $param["ReleaseName"] !== null) {
            if(is_bool($param["ReleaseName"])){
                $this->RequestParams["ReleaseName"] = $param["ReleaseName"] ? "true" : "false";
            } else {
                $this->RequestParams["ReleaseName"] = $param["ReleaseName"];
            }
        }
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
            if(is_bool($param["ReleaseVersion"])){
                $this->RequestParams["ReleaseVersion"] = $param["ReleaseVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["ReleaseVersion"] = $param["ReleaseVersion"];
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