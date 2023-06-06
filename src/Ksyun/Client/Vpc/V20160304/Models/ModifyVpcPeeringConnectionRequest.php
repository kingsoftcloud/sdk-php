<?php
namespace  Ksyun\Client\Vpc\V20160304\Models;

use Ksyun\Common\BaseModel;

class ModifyVpcPeeringConnectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VpcPeeringConnectionId" => null,
         /**String**/
        "PeeringName" => null,
         /**Int**/
        "BandWidth" => null,
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
        if (array_key_exists("PeeringName",$param) and $param["PeeringName"] !== null) {
            if(is_bool($param["PeeringName"])){
                $this->RequestParams["PeeringName"] = $param["PeeringName"] ? "true" : "false";
            } else {
                $this->RequestParams["PeeringName"] = $param["PeeringName"];
            }
        }
        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            if(is_bool($param["BandWidth"])){
                $this->RequestParams["BandWidth"] = $param["BandWidth"] ? "true" : "false";
            } else {
                $this->RequestParams["BandWidth"] = $param["BandWidth"];
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