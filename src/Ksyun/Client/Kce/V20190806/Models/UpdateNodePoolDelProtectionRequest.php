<?php
namespace  Ksyun\Client\Kce\V20190806\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateNodePoolDelProtectionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "NodePoolId" => null,
         /**Boolean**/
        "EnableDelProtection" => null,
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            if(is_bool($param["NodePoolId"])){
                $this->RequestParams["NodePoolId"] = $param["NodePoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["NodePoolId"] = $param["NodePoolId"];
            }
        }
        if (array_key_exists("EnableDelProtection",$param) and $param["EnableDelProtection"] !== null) {
            if(is_bool($param["EnableDelProtection"])){
                $this->RequestParams["EnableDelProtection"] = $param["EnableDelProtection"] ? "true" : "false";
            } else {
                $this->RequestParams["EnableDelProtection"] = $param["EnableDelProtection"];
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