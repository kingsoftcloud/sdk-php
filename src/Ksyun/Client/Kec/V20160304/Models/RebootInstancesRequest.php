<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class RebootInstancesRequest extends BaseModel
{
    public $RequestParams = [
         /**Boolean**/
        "ForceReboot" => null,
    ];

     /**特殊参数类型:Filter**/
    public $InstanceId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $res = $this->formatFilterParams("InstanceId",$param["InstanceId"]);
            $this->_unserialize("InstanceId",$res);
        }
        if (array_key_exists("ForceReboot",$param) and $param["ForceReboot"] !== null) {
            if(is_bool($param["ForceReboot"])){
                $this->RequestParams["ForceReboot"] = $param["ForceReboot"] ? "true" : "false";
            } else {
                $this->RequestParams["ForceReboot"] = $param["ForceReboot"];
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