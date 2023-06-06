<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteNetworkAclRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NetworkAclId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NetworkAclId",$param) and $param["NetworkAclId"] !== null) {
            if(is_bool($param["NetworkAclId"])){
                $this->RequestParams["NetworkAclId"] = $param["NetworkAclId"] ? "true" : "false";
            } else {
                $this->RequestParams["NetworkAclId"] = $param["NetworkAclId"];
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