<?php
namespace  Ksyun\Client\Ket\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class StartLoopRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "UniqName" => null,
         /**String**/
        "App" => null,
         /**String**/
        "Preset" => null,
         /**String**/
        "StreamID" => null,
         /**Array**/
        "SrcInfo" => null,
         /**String**/
        "PubDomain" => null,
         /**String**/
        "TaskStartTime" => null,
         /**String**/
        "TaskStopTime" => null,
         /**Int**/
        "LoopTimes" => null,
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
        if (array_key_exists("UniqName",$param) and $param["UniqName"] !== null) {
            if(is_bool($param["UniqName"])){
                $this->RequestParams["UniqName"] = $param["UniqName"] ? "true" : "false";
            } else {
                $this->RequestParams["UniqName"] = $param["UniqName"];
            }
        }
        if (array_key_exists("App",$param) and $param["App"] !== null) {
            if(is_bool($param["App"])){
                $this->RequestParams["App"] = $param["App"] ? "true" : "false";
            } else {
                $this->RequestParams["App"] = $param["App"];
            }
        }
        if (array_key_exists("Preset",$param) and $param["Preset"] !== null) {
            if(is_bool($param["Preset"])){
                $this->RequestParams["Preset"] = $param["Preset"] ? "true" : "false";
            } else {
                $this->RequestParams["Preset"] = $param["Preset"];
            }
        }
        if (array_key_exists("StreamID",$param) and $param["StreamID"] !== null) {
            if(is_bool($param["StreamID"])){
                $this->RequestParams["StreamID"] = $param["StreamID"] ? "true" : "false";
            } else {
                $this->RequestParams["StreamID"] = $param["StreamID"];
            }
        }
        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            if(is_bool($param["SrcInfo"])){
                $this->RequestParams["SrcInfo"] = $param["SrcInfo"] ? "true" : "false";
            } else {
                $this->RequestParams["SrcInfo"] = $param["SrcInfo"];
            }
        }
        if (array_key_exists("PubDomain",$param) and $param["PubDomain"] !== null) {
            if(is_bool($param["PubDomain"])){
                $this->RequestParams["PubDomain"] = $param["PubDomain"] ? "true" : "false";
            } else {
                $this->RequestParams["PubDomain"] = $param["PubDomain"];
            }
        }
        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            if(is_bool($param["TaskStartTime"])){
                $this->RequestParams["TaskStartTime"] = $param["TaskStartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskStartTime"] = $param["TaskStartTime"];
            }
        }
        if (array_key_exists("TaskStopTime",$param) and $param["TaskStopTime"] !== null) {
            if(is_bool($param["TaskStopTime"])){
                $this->RequestParams["TaskStopTime"] = $param["TaskStopTime"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskStopTime"] = $param["TaskStopTime"];
            }
        }
        if (array_key_exists("LoopTimes",$param) and $param["LoopTimes"] !== null) {
            if(is_bool($param["LoopTimes"])){
                $this->RequestParams["LoopTimes"] = $param["LoopTimes"] ? "true" : "false";
            } else {
                $this->RequestParams["LoopTimes"] = $param["LoopTimes"];
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