<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AttachInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingGroupId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $ScalingInstanceId = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ScalingGroupId",$param) and $param["ScalingGroupId"] !== null) {
            if(is_bool($param["ScalingGroupId"])){
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingGroupId"] = $param["ScalingGroupId"];
            }
        }
        if (array_key_exists("ScalingInstanceId",$param) and $param["ScalingInstanceId"] !== null) {
            $res = $this->formatFilterParams("ScalingInstanceId",$param["ScalingInstanceId"]);
            $this->_unserialize("ScalingInstanceId",$res);
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