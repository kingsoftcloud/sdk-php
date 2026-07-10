<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DeleteLaunchTemplateVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LaunchTemplateId" => null,
    ];

     /**特殊参数类型:Filter**/
    public $LaunchTemplateVersion = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            if(is_bool($param["LaunchTemplateId"])){
                $this->RequestParams["LaunchTemplateId"] = $param["LaunchTemplateId"] ? "true" : "false";
            } else {
                $this->RequestParams["LaunchTemplateId"] = $param["LaunchTemplateId"];
            }
        }
        if (array_key_exists("LaunchTemplateVersion",$param) and $param["LaunchTemplateVersion"] !== null) {
            $res = $this->formatFilterParams("LaunchTemplateVersion",$param["LaunchTemplateVersion"]);
            $this->_unserialize("LaunchTemplateVersion",$res);
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