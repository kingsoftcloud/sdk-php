<?php
namespace  Ksyun\Client\Aicp\V20260401\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class GetSandboxTemplateListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TemplateType" => null,
         /**String**/
        "TemplateName" => null,
         /**Int**/
        "PageNum" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            if(is_bool($param["TemplateType"])){
                $this->RequestParams["TemplateType"] = $param["TemplateType"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateType"] = $param["TemplateType"];
            }
        }
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            if(is_bool($param["TemplateName"])){
                $this->RequestParams["TemplateName"] = $param["TemplateName"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateName"] = $param["TemplateName"];
            }
        }
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            if(is_bool($param["PageNum"])){
                $this->RequestParams["PageNum"] = $param["PageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNum"] = $param["PageNum"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
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