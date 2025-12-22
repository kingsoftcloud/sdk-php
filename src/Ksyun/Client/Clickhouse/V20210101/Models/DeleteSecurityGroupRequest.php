<?php
namespace  Ksyun\Client\Clickhouse\V20210101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteSecurityGroupRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SecurityGroupIds" => null,
         /**Int**/
        "ProductType" => null,
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
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            if(is_bool($param["SecurityGroupIds"])){
                $this->RequestParams["SecurityGroupIds"] = $param["SecurityGroupIds"] ? "true" : "false";
            } else {
                $this->RequestParams["SecurityGroupIds"] = $param["SecurityGroupIds"];
            }
        }
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            if(is_bool($param["ProductType"])){
                $this->RequestParams["ProductType"] = $param["ProductType"] ? "true" : "false";
            } else {
                $this->RequestParams["ProductType"] = $param["ProductType"];
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