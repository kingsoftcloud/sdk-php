<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyBackendServerGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "BackendServerGroupId" => null,
         /**String**/
        "BackendServerGroupName" => null,
         /**String**/
        "UpstreamKeepalive" => null,
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
        if (array_key_exists("BackendServerGroupId",$param) and $param["BackendServerGroupId"] !== null) {
            if(is_bool($param["BackendServerGroupId"])){
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupId"] = $param["BackendServerGroupId"];
            }
        }
        if (array_key_exists("BackendServerGroupName",$param) and $param["BackendServerGroupName"] !== null) {
            if(is_bool($param["BackendServerGroupName"])){
                $this->RequestParams["BackendServerGroupName"] = $param["BackendServerGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["BackendServerGroupName"] = $param["BackendServerGroupName"];
            }
        }
        if (array_key_exists("UpstreamKeepalive",$param) and $param["UpstreamKeepalive"] !== null) {
            if(is_bool($param["UpstreamKeepalive"])){
                $this->RequestParams["UpstreamKeepalive"] = $param["UpstreamKeepalive"] ? "true" : "false";
            } else {
                $this->RequestParams["UpstreamKeepalive"] = $param["UpstreamKeepalive"];
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