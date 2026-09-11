<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateSkillVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SourceType" => null,
         /**String**/
        "SourceUrl" => null,
         /**Array**/
        "SkillSpaces" => null,
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
        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            if(is_bool($param["SourceType"])){
                $this->RequestParams["SourceType"] = $param["SourceType"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceType"] = $param["SourceType"];
            }
        }
        if (array_key_exists("SourceUrl",$param) and $param["SourceUrl"] !== null) {
            if(is_bool($param["SourceUrl"])){
                $this->RequestParams["SourceUrl"] = $param["SourceUrl"] ? "true" : "false";
            } else {
                $this->RequestParams["SourceUrl"] = $param["SourceUrl"];
            }
        }
        if (array_key_exists("SkillSpaces",$param) and $param["SkillSpaces"] !== null) {
            if(is_bool($param["SkillSpaces"])){
                $this->RequestParams["SkillSpaces"] = $param["SkillSpaces"] ? "true" : "false";
            } else {
                $this->RequestParams["SkillSpaces"] = $param["SkillSpaces"];
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