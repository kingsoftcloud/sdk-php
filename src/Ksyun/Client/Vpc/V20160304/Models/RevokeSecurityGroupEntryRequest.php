<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class RevokeSecurityGroupEntryRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupId" => null,
         /**String**/
        "SecurityGroupEntryId" => null,
    ];


    public function __construct()
    {

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
        if (array_key_exists("SecurityGroupEntryId",$param) and $param["SecurityGroupEntryId"] !== null) {
            if(is_bool($param["SecurityGroupEntryId"])){
                $this->RequestParams["SecurityGroupEntryId"] = $param["SecurityGroupEntryId"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupEntryId"] = $param["SecurityGroupEntryId"];
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