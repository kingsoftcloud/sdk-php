<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class CreateSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcId" => null,
         /**String**/
        "SecurityGroupName" => null,
         /**String**/
        "Description" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
            }
        }
        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            if(is_bool($param["SecurityGroupName"])){
                $this->RequestParams["SecurityGroupName"] = $param["SecurityGroupName"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupName"] = $param["SecurityGroupName"];
            }
        }
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            if(is_bool($param["Description"])){
                $this->RequestParams["Description"] = $param["Description"] ? "true" : "false";
            } else {
                $this->RequestParams["Description"] = $param["Description"];
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