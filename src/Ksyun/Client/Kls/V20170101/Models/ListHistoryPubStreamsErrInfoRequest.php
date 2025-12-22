<?php
namespace  Ksyun\Client\Kls\V20170101\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListHistoryPubStreamsErrInfoRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "UniqueName" => null,
         /**String**/
        "App" => null,
         /**String**/
        "Pubdomain" => null,
         /**String**/
        "Stream" => null,
         /**Int**/
        "OrderTime" => null,
         /**Int**/
        "Marker" => null,
         /**Int**/
        "Limit" => null,
         /**Int**/
        "StartUnixTime" => null,
         /**Int**/
        "EndUnixTime" => null,
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
        if (array_key_exists("UniqueName",$param) and $param["UniqueName"] !== null) {
            if(is_bool($param["UniqueName"])){
                $this->RequestParams["UniqueName"] = $param["UniqueName"] ? "true" : "false";
            } else {
                $this->RequestParams["UniqueName"] = $param["UniqueName"];
            }
        }
        if (array_key_exists("App",$param) and $param["App"] !== null) {
            if(is_bool($param["App"])){
                $this->RequestParams["App"] = $param["App"] ? "true" : "false";
            } else {
                $this->RequestParams["App"] = $param["App"];
            }
        }
        if (array_key_exists("Pubdomain",$param) and $param["Pubdomain"] !== null) {
            if(is_bool($param["Pubdomain"])){
                $this->RequestParams["Pubdomain"] = $param["Pubdomain"] ? "true" : "false";
            } else {
                $this->RequestParams["Pubdomain"] = $param["Pubdomain"];
            }
        }
        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            if(is_bool($param["Stream"])){
                $this->RequestParams["Stream"] = $param["Stream"] ? "true" : "false";
            } else {
                $this->RequestParams["Stream"] = $param["Stream"];
            }
        }
        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            if(is_bool($param["OrderTime"])){
                $this->RequestParams["OrderTime"] = $param["OrderTime"] ? "true" : "false";
            } else {
                $this->RequestParams["OrderTime"] = $param["OrderTime"];
            }
        }
        if (array_key_exists("Marker",$param) and $param["Marker"] !== null) {
            if(is_bool($param["Marker"])){
                $this->RequestParams["Marker"] = $param["Marker"] ? "true" : "false";
            } else {
                $this->RequestParams["Marker"] = $param["Marker"];
            }
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            if(is_bool($param["Limit"])){
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
            }
        }
        if (array_key_exists("StartUnixTime",$param) and $param["StartUnixTime"] !== null) {
            if(is_bool($param["StartUnixTime"])){
                $this->RequestParams["StartUnixTime"] = $param["StartUnixTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartUnixTime"] = $param["StartUnixTime"];
            }
        }
        if (array_key_exists("EndUnixTime",$param) and $param["EndUnixTime"] !== null) {
            if(is_bool($param["EndUnixTime"])){
                $this->RequestParams["EndUnixTime"] = $param["EndUnixTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndUnixTime"] = $param["EndUnixTime"];
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