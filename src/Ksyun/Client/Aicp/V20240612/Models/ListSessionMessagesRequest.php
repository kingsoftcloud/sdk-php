<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListSessionMessagesRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "AgentId" => null,
         /**String**/
        "SessionId" => null,
         /**Int**/
        "AfterSeqId" => null,
         /**Int**/
        "BeforeSeqId" => null,
         /**String**/
        "CursorSource" => null,
         /**String**/
        "HistoryEpoch" => null,
         /**Int**/
        "SnapshotSeqId" => null,
         /**Int**/
        "Limit" => null,
         /**Boolean**/
        "IncludeReasoning" => null,
         /**Boolean**/
        "IncludeToolEvents" => null,
         /**Boolean**/
        "IncludeAttachments" => null,
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            if(is_bool($param["AgentId"])){
                $this->RequestParams["AgentId"] = $param["AgentId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentId"] = $param["AgentId"];
            }
        }
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            if(is_bool($param["SessionId"])){
                $this->RequestParams["SessionId"] = $param["SessionId"] ? "true" : "false";
            } else {
                $this->RequestParams["SessionId"] = $param["SessionId"];
            }
        }
        if (array_key_exists("AfterSeqId",$param) and $param["AfterSeqId"] !== null) {
            if(is_bool($param["AfterSeqId"])){
                $this->RequestParams["AfterSeqId"] = $param["AfterSeqId"] ? "true" : "false";
            } else {
                $this->RequestParams["AfterSeqId"] = $param["AfterSeqId"];
            }
        }
        if (array_key_exists("BeforeSeqId",$param) and $param["BeforeSeqId"] !== null) {
            if(is_bool($param["BeforeSeqId"])){
                $this->RequestParams["BeforeSeqId"] = $param["BeforeSeqId"] ? "true" : "false";
            } else {
                $this->RequestParams["BeforeSeqId"] = $param["BeforeSeqId"];
            }
        }
        if (array_key_exists("CursorSource",$param) and $param["CursorSource"] !== null) {
            if(is_bool($param["CursorSource"])){
                $this->RequestParams["CursorSource"] = $param["CursorSource"] ? "true" : "false";
            } else {
                $this->RequestParams["CursorSource"] = $param["CursorSource"];
            }
        }
        if (array_key_exists("HistoryEpoch",$param) and $param["HistoryEpoch"] !== null) {
            if(is_bool($param["HistoryEpoch"])){
                $this->RequestParams["HistoryEpoch"] = $param["HistoryEpoch"] ? "true" : "false";
            } else {
                $this->RequestParams["HistoryEpoch"] = $param["HistoryEpoch"];
            }
        }
        if (array_key_exists("SnapshotSeqId",$param) and $param["SnapshotSeqId"] !== null) {
            if(is_bool($param["SnapshotSeqId"])){
                $this->RequestParams["SnapshotSeqId"] = $param["SnapshotSeqId"] ? "true" : "false";
            } else {
                $this->RequestParams["SnapshotSeqId"] = $param["SnapshotSeqId"];
            }
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            if(is_bool($param["Limit"])){
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
            }
        }
        if (array_key_exists("IncludeReasoning",$param) and $param["IncludeReasoning"] !== null) {
            if(is_bool($param["IncludeReasoning"])){
                $this->RequestParams["IncludeReasoning"] = $param["IncludeReasoning"] ? "true" : "false";
            } else {
                $this->RequestParams["IncludeReasoning"] = $param["IncludeReasoning"];
            }
        }
        if (array_key_exists("IncludeToolEvents",$param) and $param["IncludeToolEvents"] !== null) {
            if(is_bool($param["IncludeToolEvents"])){
                $this->RequestParams["IncludeToolEvents"] = $param["IncludeToolEvents"] ? "true" : "false";
            } else {
                $this->RequestParams["IncludeToolEvents"] = $param["IncludeToolEvents"];
            }
        }
        if (array_key_exists("IncludeAttachments",$param) and $param["IncludeAttachments"] !== null) {
            if(is_bool($param["IncludeAttachments"])){
                $this->RequestParams["IncludeAttachments"] = $param["IncludeAttachments"] ? "true" : "false";
            } else {
                $this->RequestParams["IncludeAttachments"] = $param["IncludeAttachments"];
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