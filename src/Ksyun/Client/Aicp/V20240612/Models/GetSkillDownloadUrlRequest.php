<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetSkillDownloadUrlRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "SkillId" => null,
         /**String**/
        "VersionId" => null,
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
        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            if(is_bool($param["SkillId"])){
                $this->RequestParams["SkillId"] = $param["SkillId"] ? "true" : "false";
            } else {
                $this->RequestParams["SkillId"] = $param["SkillId"];
            }
        }
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            if(is_bool($param["VersionId"])){
                $this->RequestParams["VersionId"] = $param["VersionId"] ? "true" : "false";
            } else {
                $this->RequestParams["VersionId"] = $param["VersionId"];
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