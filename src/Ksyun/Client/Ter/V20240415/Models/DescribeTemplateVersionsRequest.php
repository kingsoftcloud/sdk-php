<?php
namespace  Ksyun\Client\Ter\V20240415\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeTemplateVersionsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "TemplateId" => null,
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            if(is_bool($param["TemplateId"])){
                $this->RequestParams["TemplateId"] = $param["TemplateId"] ? "true" : "false";
            } else {
                $this->RequestParams["TemplateId"] = $param["TemplateId"];
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