<?php
namespace  Ksyun\Client\Krds\V20200825\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifySecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "SecurityGroupName" => null,
         /**String**/
        "SecurityGroupDescription" => null,
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            if(is_bool($param["SecurityGroupId"])){
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupId"] = $param["SecurityGroupId"];
            }
        }
        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            if(is_bool($param["SecurityGroupName"])){
                $this->RequestParams["SecurityGroupName"] = $param["SecurityGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupName"] = $param["SecurityGroupName"];
            }
        }
        if (array_key_exists("SecurityGroupDescription",$param) and $param["SecurityGroupDescription"] !== null) {
            if(is_bool($param["SecurityGroupDescription"])){
                $this->RequestParams["SecurityGroupDescription"] = $param["SecurityGroupDescription"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupDescription"] = $param["SecurityGroupDescription"];
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