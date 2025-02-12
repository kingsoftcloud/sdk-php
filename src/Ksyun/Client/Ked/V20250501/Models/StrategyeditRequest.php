<?php
namespace  Ksyun\Client\Ked\V20250501\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StrategyeditRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "securityGroupId" => null,
         /**String**/
        "name" => null,
         /**String**/
        "description" => null,
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
        if (array_key_exists("securityGroupId",$param) and $param["securityGroupId"] !== null) {
            if(is_bool($param["securityGroupId"])){
                $this->RequestParams["securityGroupId"] = $param["securityGroupId"] ? "true" : "false";
            } else {
                $this->RequestParams["securityGroupId"] = $param["securityGroupId"];
            }
        }
        if (array_key_exists("name",$param) and $param["name"] !== null) {
            if(is_bool($param["name"])){
                $this->RequestParams["name"] = $param["name"] ? "true" : "false";
            } else {
                $this->RequestParams["name"] = $param["name"];
            }
        }
        if (array_key_exists("description",$param) and $param["description"] !== null) {
            if(is_bool($param["description"])){
                $this->RequestParams["description"] = $param["description"] ? "true" : "false";
            } else {
                $this->RequestParams["description"] = $param["description"];
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