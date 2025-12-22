<?php
namespace  Ksyun\Client\Sqlserver\V20190425\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupId" => null,
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
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