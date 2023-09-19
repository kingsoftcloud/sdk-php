<?php
namespace  Ksyun\Client\Slb\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteAlbRuleGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AlbRuleGroupId" => null,
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
        if (array_key_exists("AlbRuleGroupId",$param) and $param["AlbRuleGroupId"] !== null) {
            if(is_bool($param["AlbRuleGroupId"])){
                $this->RequestParams["AlbRuleGroupId"] = $param["AlbRuleGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AlbRuleGroupId"] = $param["AlbRuleGroupId"];
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