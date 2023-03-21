<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;

class DeleteScalingConfigurationRequest extends BaseModel
{
    public $RequestParams = [
    ];

     /**特殊参数类型:Filter**/
    public $ScalingConfigurationId = [];
 
    public function __construct()
    {

    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingConfigurationId",$param) and $param["ScalingConfigurationId"] !== null) {
            $res = $this->formatFilterParams("ScalingConfigurationId",$param["ScalingConfigurationId"]);
            $this->_unserialize("ScalingConfigurationId",$res);
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