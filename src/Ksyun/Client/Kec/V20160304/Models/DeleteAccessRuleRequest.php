<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteAccessRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AccessGroupId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $AccessRuleId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            if(is_bool($param["AccessGroupId"])){
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["AccessGroupId"] = $param["AccessGroupId"];
            }
        }
        if (array_key_exists("AccessRuleId",$param) and $param["AccessRuleId"] !== null) {
            $res = $this->formatFilterParams("AccessRuleId",$param["AccessRuleId"]);
            $this->_unserialize("AccessRuleId",$res);
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