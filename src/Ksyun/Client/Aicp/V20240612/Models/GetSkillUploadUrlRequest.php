<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetSkillUploadUrlRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileName" => null,
         /**String**/
        "SkillName" => null,
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            if(is_bool($param["FileName"])){
                $this->RequestParams["FileName"] = $param["FileName"] ? "true" : "false";
            } else {
                $this->RequestParams["FileName"] = $param["FileName"];
            }
        }
        if (array_key_exists("SkillName",$param) and $param["SkillName"] !== null) {
            if(is_bool($param["SkillName"])){
                $this->RequestParams["SkillName"] = $param["SkillName"] ? "true" : "false";
            } else {
                $this->RequestParams["SkillName"] = $param["SkillName"];
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