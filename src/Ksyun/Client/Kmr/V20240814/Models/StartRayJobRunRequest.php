<?php
namespace  Ksyun\Client\Kmr\V20240814\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StartRayJobRunRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "WorkspaceId" => null,
         /**String**/
        "AccessKeyId" => null,
         /**String**/
        "AccessKeySecret" => null,
         /**String**/
        "ReleaseVersion" => null,
         /**Object**/
        "RaySubmitData" => null,
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            if(is_bool($param["WorkspaceId"])){
                $this->RequestParams["WorkspaceId"] = $param["WorkspaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["WorkspaceId"] = $param["WorkspaceId"];
            }
        }
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            if(is_bool($param["AccessKeyId"])){
                $this->RequestParams["AccessKeyId"] = $param["AccessKeyId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessKeyId"] = $param["AccessKeyId"];
            }
        }
        if (array_key_exists("AccessKeySecret",$param) and $param["AccessKeySecret"] !== null) {
            if(is_bool($param["AccessKeySecret"])){
                $this->RequestParams["AccessKeySecret"] = $param["AccessKeySecret"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessKeySecret"] = $param["AccessKeySecret"];
            }
        }
        if (array_key_exists("ReleaseVersion",$param) and $param["ReleaseVersion"] !== null) {
            if(is_bool($param["ReleaseVersion"])){
                $this->RequestParams["ReleaseVersion"] = $param["ReleaseVersion"] ? "true" : "false";
            } else {
                $this->RequestParams["ReleaseVersion"] = $param["ReleaseVersion"];
            }
        }
        if (array_key_exists("RaySubmitData",$param) and $param["RaySubmitData"] !== null) {
            if(is_bool($param["RaySubmitData"])){
                $this->RequestParams["RaySubmitData"] = $param["RaySubmitData"] ? "true" : "false";
            } else {
                $this->RequestParams["RaySubmitData"] = $param["RaySubmitData"];
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