<?php
namespace  Ksyun\Client\Krds\V20160701\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupIdList" => null,
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
        if (array_key_exists("SecurityGroupIdList",$param) and $param["SecurityGroupIdList"] !== null) {
            if(is_bool($param["SecurityGroupIdList"])){
                $this->RequestParams["SecurityGroupIdList"] = $param["SecurityGroupIdList"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupIdList"] = $param["SecurityGroupIdList"];
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