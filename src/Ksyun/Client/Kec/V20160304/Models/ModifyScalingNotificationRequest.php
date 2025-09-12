<?php
namespace  Ksyun\Client\Kec\V20160304\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyScalingNotificationRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ScalingGroupId" => null,
         /**Int**/
        "ScalingNotificationId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $NotificationType = [];
 
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
        if (array_key_exists("ScalingNotificationId",$param) and $param["ScalingNotificationId"] !== null) {
            if(is_bool($param["ScalingNotificationId"])){
                $this->RequestParams["ScalingNotificationId"] = $param["ScalingNotificationId"] ? "true" : "false";
            } else {
                $this->RequestParams["ScalingNotificationId"] = $param["ScalingNotificationId"];
            }
        }
        if (array_key_exists("NotificationType",$param) and $param["NotificationType"] !== null) {
            $res = $this->formatFilterParams("NotificationType",$param["NotificationType"]);
            $this->_unserialize("NotificationType",$res);
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