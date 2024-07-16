<?php
namespace  Ksyun\Client\Kcrs\V20211109\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteRepoTagRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "InstanceId" => null,
         /**String**/
        "Namespace" => null,
         /**String**/
        "RepoName" => null,
         /**String**/
        "TagName" => null,
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            if(is_bool($param["Namespace"])){
                $this->RequestParams["Namespace"] = $param["Namespace"] ? "true" : "false";
            } else {
                $this->RequestParams["Namespace"] = $param["Namespace"];
            }
        }
        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            if(is_bool($param["RepoName"])){
                $this->RequestParams["RepoName"] = $param["RepoName"] ? "true" : "false";
            } else {
                $this->RequestParams["RepoName"] = $param["RepoName"];
            }
        }
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            if(is_bool($param["TagName"])){
                $this->RequestParams["TagName"] = $param["TagName"] ? "true" : "false";
            } else {
                $this->RequestParams["TagName"] = $param["TagName"];
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