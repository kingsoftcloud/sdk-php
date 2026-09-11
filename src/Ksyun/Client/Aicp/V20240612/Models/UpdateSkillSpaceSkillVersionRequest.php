<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class UpdateSkillSpaceSkillVersionRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SpaceId" => null,
         /**String**/
        "SkillId" => null,
         /**String**/
        "VersionName" => null,
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            if(is_bool($param["SpaceId"])){
                $this->RequestParams["SpaceId"] = $param["SpaceId"] ? "true" : "false";
            } else {
                $this->RequestParams["SpaceId"] = $param["SpaceId"];
            }
        }
        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            if(is_bool($param["SkillId"])){
                $this->RequestParams["SkillId"] = $param["SkillId"] ? "true" : "false";
            } else {
                $this->RequestParams["SkillId"] = $param["SkillId"];
            }
        }
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            if(is_bool($param["VersionName"])){
                $this->RequestParams["VersionName"] = $param["VersionName"] ? "true" : "false";
            } else {
                $this->RequestParams["VersionName"] = $param["VersionName"];
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