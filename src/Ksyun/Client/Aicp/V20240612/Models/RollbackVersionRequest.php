<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class RollbackVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AgentId" => null,
         /**String**/
        "TargetVersionId" => null,
         /**String**/
        "TargetTag" => null,
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            if(is_bool($param["AgentId"])){
                $this->RequestParams["AgentId"] = $param["AgentId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentId"] = $param["AgentId"];
            }
        }
        if (array_key_exists("TargetVersionId",$param) and $param["TargetVersionId"] !== null) {
            if(is_bool($param["TargetVersionId"])){
                $this->RequestParams["TargetVersionId"] = $param["TargetVersionId"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetVersionId"] = $param["TargetVersionId"];
            }
        }
        if (array_key_exists("TargetTag",$param) and $param["TargetTag"] !== null) {
            if(is_bool($param["TargetTag"])){
                $this->RequestParams["TargetTag"] = $param["TargetTag"] ? "true" : "false";
            } else {
                $this->RequestParams["TargetTag"] = $param["TargetTag"];
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