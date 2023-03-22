<?php
namespace  Ksyun\Client\Ebs\V20160304\Models;

use Ksyun\Common\BaseModel;

class ResizeVolumeRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "VolumeId" => null,
         /**String**/
        "Size" => null,
         /**Boolean**/
        "OnlineResize" => null,
         /**String**/
        "SubOrderId" => null,
    ];


    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            if(is_bool($param["VolumeId"])){
                $this->RequestParams["VolumeId"] = $param["VolumeId"] ? "true" : "false";
            } else {
                $this->RequestParams["VolumeId"] = $param["VolumeId"];
            }
        }
        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            if(is_bool($param["Size"])){
                $this->RequestParams["Size"] = $param["Size"] ? "true" : "false";
            } else {
                $this->RequestParams["Size"] = $param["Size"];
            }
        }
        if (array_key_exists("OnlineResize",$param) and $param["OnlineResize"] !== null) {
            if(is_bool($param["OnlineResize"])){
                $this->RequestParams["OnlineResize"] = $param["OnlineResize"] ? "true" : "false";
            } else {
                $this->RequestParams["OnlineResize"] = $param["OnlineResize"];
            }
        }
        if (array_key_exists("SubOrderId",$param) and $param["SubOrderId"] !== null) {
            if(is_bool($param["SubOrderId"])){
                $this->RequestParams["SubOrderId"] = $param["SubOrderId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubOrderId"] = $param["SubOrderId"];
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