<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateMigrateRuleRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Name" => null,
         /**String**/
        "Region" => null,
         /**Object**/
        "SrcData" => null,
         /**Object**/
        "DstData" => null,
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            if(is_bool($param["Name"])){
                $this->RequestParams["Name"] = $param["Name"] ? "true" : "false";
            } else {
                $this->RequestParams["Name"] = $param["Name"];
            }
        }
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            if(is_bool($param["Region"])){
                $this->RequestParams["Region"] = $param["Region"] ? "true" : "false";
            } else {
                $this->RequestParams["Region"] = $param["Region"];
            }
        }
        if (array_key_exists("SrcData",$param) and $param["SrcData"] !== null) {
            if(is_bool($param["SrcData"])){
                $this->RequestParams["SrcData"] = $param["SrcData"] ? "true" : "false";
            } else {
                $this->RequestParams["SrcData"] = $param["SrcData"];
            }
        }
        if (array_key_exists("DstData",$param) and $param["DstData"] !== null) {
            if(is_bool($param["DstData"])){
                $this->RequestParams["DstData"] = $param["DstData"] ? "true" : "false";
            } else {
                $this->RequestParams["DstData"] = $param["DstData"];
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