<?php
namespace  Ksyun\Client\Milvus\V20231010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UnbindSecurityGroupInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "InstancesIds" => null,
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
        if (array_key_exists("InstancesIds",$param) and $param["InstancesIds"] !== null) {
            if(is_bool($param["InstancesIds"])){
                $this->RequestParams["InstancesIds"] = $param["InstancesIds"] ? "true" : "false";
            } else {
                $this->RequestParams["InstancesIds"] = $param["InstancesIds"];
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