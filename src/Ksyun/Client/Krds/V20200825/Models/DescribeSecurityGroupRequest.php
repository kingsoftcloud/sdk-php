<?php
namespace  Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupType" => null,
    ];

     /**特殊参数类型:Filter**/
    public $SecurityGroupId = [];
 
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
            $res = $this->formatFilterParams("SecurityGroupId",$param["SecurityGroupId"]);
            $this->_unserialize("SecurityGroupId",$res);
        }
        if (array_key_exists("SecurityGroupType",$param) and $param["SecurityGroupType"] !== null) {
            if(is_bool($param["SecurityGroupType"])){
                $this->RequestParams["SecurityGroupType"] = $param["SecurityGroupType"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupType"] = $param["SecurityGroupType"];
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