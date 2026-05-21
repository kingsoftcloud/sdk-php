<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ModifyComponentsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "ResourcePoolId" => null,
         /**Array**/
        "Components" => null,
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
        if (array_key_exists("ResourcePoolId",$param) and $param["ResourcePoolId"] !== null) {
            if(is_bool($param["ResourcePoolId"])){
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"] ? "true" : "false";
            } else {
                $this->RequestParams["ResourcePoolId"] = $param["ResourcePoolId"];
            }
        }
        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            if(is_bool($param["Components"])){
                $this->RequestParams["Components"] = $param["Components"] ? "true" : "false";
            } else {
                $this->RequestParams["Components"] = $param["Components"];
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