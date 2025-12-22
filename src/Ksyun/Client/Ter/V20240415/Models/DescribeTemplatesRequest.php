<?php
namespace  Ksyun\Client\Ter\V20240415\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeTemplatesRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "MaxResults" => null,
         /**Int**/
        "Offset" => null,
         /**String**/
        "TemplateType" => null,
    ];

     /**特殊参数类型:Filter**/
    public $TemplateId = [];
      /**特殊参数类型:Filter**/
    public $TemplateName = [];
 
    public function __construct(HttpOptions $httpOptions)
    {
        $httpOptions->setHeaderContentType("application/x-www-form-urlencoded");
    }

    public function setParams($param = [])
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            if(is_bool($param["MaxResults"])){
                $this->RequestParams["MaxResults"] = $param["MaxResults"] ? "true" : "false";
            } else {
                $this->RequestParams["MaxResults"] = $param["MaxResults"];
            }
        }
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $res = $this->formatFilterParams("TemplateId",$param["TemplateId"]);
            $this->_unserialize("TemplateId",$res);
        }
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            if(is_bool($param["Offset"])){
                $this->RequestParams["Offset"] = $param["Offset"] ? "true" : "false";
            } else {
                $this->RequestParams["Offset"] = $param["Offset"];
            }
        }
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $res = $this->formatFilterParams("TemplateName",$param["TemplateName"]);
            $this->_unserialize("TemplateName",$res);
        }
        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            if(is_bool($param["TemplateType"])){
                $this->RequestParams["TemplateType"] = $param["TemplateType"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateType"] = $param["TemplateType"];
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