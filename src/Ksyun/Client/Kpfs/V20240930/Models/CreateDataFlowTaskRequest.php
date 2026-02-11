<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class CreateDataFlowTaskRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "DataFlowId" => null,
         /**String**/
        "TaskAction" => null,
         /**String**/
        "SrcDirectory" => null,
         /**String**/
        "DstDirectory" => null,
         /**Array**/
        "EntryList" => null,
         /**Int**/
        "Bandwidth" => null,
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
        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            if(is_bool($param["DataFlowId"])){
                $this->RequestParams["DataFlowId"] = $param["DataFlowId"] ? "true" : "false";
            } else {
                $this->RequestParams["DataFlowId"] = $param["DataFlowId"];
            }
        }
        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            if(is_bool($param["TaskAction"])){
                $this->RequestParams["TaskAction"] = $param["TaskAction"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskAction"] = $param["TaskAction"];
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
        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            if(is_bool($param["Bandwidth"])){
                $this->RequestParams["Bandwidth"] = $param["Bandwidth"] ? "true" : "false";
            } else {
                $this->RequestParams["Bandwidth"] = $param["Bandwidth"];
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