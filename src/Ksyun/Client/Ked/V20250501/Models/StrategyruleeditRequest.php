<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StrategyruleeditRequest extends BaseModel
{
    public $RequestParams = [
         /**Object**/
        "policies" => null,
         /**String**/
        "securityGroupId" => null,
    ];


    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/json");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("policies",$param) and $param["policies"] !== null) {
            if(is_bool($param["policies"])){
                $this->RequestParams["policies"] = $param["policies"] ? "true" : "false";
            } else {
                $this->RequestParams["policies"] = $param["policies"];
            }
        }
        if (array_key_exists("securityGroupId",$param) and $param["securityGroupId"] !== null) {
            if(is_bool($param["securityGroupId"])){
                $this->RequestParams["securityGroupId"] = $param["securityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["securityGroupId"] = $param["securityGroupId"];
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