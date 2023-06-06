<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyVpcRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcName" => null,
         /**String**/
        "VpcId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            if(is_bool($param["VpcName"])){
                $this->RequestParams["VpcName"] = $param["VpcName"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcName"] = $param["VpcName"];
            }
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            if(is_bool($param["VpcId"])){
                $this->RequestParams["VpcId"] = $param["VpcId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcId"] = $param["VpcId"];
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