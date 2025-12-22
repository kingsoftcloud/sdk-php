<?php
namespace  Ksyun\Client\Milvus\V20231010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSecurityRulesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $Rules = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $res = $this->formatFilterParams("Rules",$param["Rules"]);
            $this->_unserialize("Rules",$res);
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