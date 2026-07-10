<?php
namespace  Ksyun\Client\Epc\V20151101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyTemplateDefaultVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "LaunchTemplateId" => null,
         /**Int**/
        "DefaultVersionNumber" => null,
    ];


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
        if (array_key_exists("DefaultVersionNumber",$param) and $param["DefaultVersionNumber"] !== null) {
            if(is_bool($param["DefaultVersionNumber"])){
                $this->RequestParams["DefaultVersionNumber"] = $param["DefaultVersionNumber"] ? "true" : "false";
            } else {
                $this->RequestParams["DefaultVersionNumber"] = $param["DefaultVersionNumber"];
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