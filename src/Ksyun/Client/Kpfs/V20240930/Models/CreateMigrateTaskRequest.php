<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateMigrateTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RuleId" => null,
         /**String**/
        "SrcDirectory" => null,
         /**String**/
        "DstDirectory" => null,
         /**Array**/
        "EntryList" => null,
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            if(is_bool($param["RuleId"])){
                $this->RequestParams["RuleId"] = $param["RuleId"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleId"] = $param["RuleId"];
            }
        }
        if (array_key_exists("SrcDirectory",$param) and $param["SrcDirectory"] !== null) {
            if(is_bool($param["SrcDirectory"])){
                $this->RequestParams["SrcDirectory"] = $param["SrcDirectory"] ? "true" : "false";
            } else {
                $this->RequestParams["SrcDirectory"] = $param["SrcDirectory"];
            }
        }
        if (array_key_exists("DstDirectory",$param) and $param["DstDirectory"] !== null) {
            if(is_bool($param["DstDirectory"])){
                $this->RequestParams["DstDirectory"] = $param["DstDirectory"] ? "true" : "false";
            } else {
                $this->RequestParams["DstDirectory"] = $param["DstDirectory"];
            }
        }
        if (array_key_exists("EntryList",$param) and $param["EntryList"] !== null) {
            if(is_bool($param["EntryList"])){
                $this->RequestParams["EntryList"] = $param["EntryList"] ? "true" : "false";
            } else {
                $this->RequestParams["EntryList"] = $param["EntryList"];
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