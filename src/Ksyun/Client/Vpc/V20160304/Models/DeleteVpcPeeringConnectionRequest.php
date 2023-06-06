<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteVpcPeeringConnectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcPeeringConnectionId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcPeeringConnectionId",$param) and $param["VpcPeeringConnectionId"] !== null) {
            if(is_bool($param["VpcPeeringConnectionId"])){
                $this->RequestParams["VpcPeeringConnectionId"] = $param["VpcPeeringConnectionId"] ? "true" : "false";
            } else {
                $this->RequestParams["VpcPeeringConnectionId"] = $param["VpcPeeringConnectionId"];
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