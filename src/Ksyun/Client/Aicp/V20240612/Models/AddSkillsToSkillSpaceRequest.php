<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class AddSkillsToSkillSpaceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SkillSpaceId" => null,
         /**Object**/
        "Skills" => null,
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
        if (array_key_exists("SkillSpaceId",$param) and $param["SkillSpaceId"] !== null) {
            if(is_bool($param["SkillSpaceId"])){
                $this->RequestParams["SkillSpaceId"] = $param["SkillSpaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["SkillSpaceId"] = $param["SkillSpaceId"];
            }
        }
        if (array_key_exists("Skills",$param) and $param["Skills"] !== null) {
            if(is_bool($param["Skills"])){
                $this->RequestParams["Skills"] = $param["Skills"] ? "true" : "false";
            } else {
                $this->RequestParams["Skills"] = $param["Skills"];
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