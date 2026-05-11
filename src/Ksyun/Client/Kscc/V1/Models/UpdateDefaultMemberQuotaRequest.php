<?php
namespace  Ksyun\Client\Kscc\V1\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateDefaultMemberQuotaRequest extends BaseModel
{
    public $RequestParams = [
         /**Double**/
        "DefaultMemberQuota" => null,
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
        if (array_key_exists("DefaultMemberQuota",$param) and $param["DefaultMemberQuota"] !== null) {
            if(is_bool($param["DefaultMemberQuota"])){
                $this->RequestParams["DefaultMemberQuota"] = $param["DefaultMemberQuota"] ? "true" : "false";
            } else {
                $this->RequestParams["DefaultMemberQuota"] = $param["DefaultMemberQuota"];
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