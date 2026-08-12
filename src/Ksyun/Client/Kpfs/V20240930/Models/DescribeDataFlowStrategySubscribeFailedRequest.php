<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDataFlowStrategySubscribeFailedRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "StrategyId" => null,
         /**String**/
        "SubscribeId" => null,
         /**String**/
        "StartTime" => null,
         /**String**/
        "EndTime" => null,
         /**Int**/
        "PageNum" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            if(is_bool($param["FileSystemId"])){
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"] ? "true" : "false";
            } else {
                $this->RequestParams["FileSystemId"] = $param["FileSystemId"];
            }
        }
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            if(is_bool($param["StrategyId"])){
                $this->RequestParams["StrategyId"] = $param["StrategyId"] ? "true" : "false";
            } else {
                $this->RequestParams["StrategyId"] = $param["StrategyId"];
            }
        }
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            if(is_bool($param["SubscribeId"])){
                $this->RequestParams["SubscribeId"] = $param["SubscribeId"] ? "true" : "false";
            } else {
                $this->RequestParams["SubscribeId"] = $param["SubscribeId"];
            }
        }
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            if(is_bool($param["StartTime"])){
                $this->RequestParams["StartTime"] = $param["StartTime"] ? "true" : "false";
            } else {
                $this->RequestParams["StartTime"] = $param["StartTime"];
            }
        }
        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            if(is_bool($param["EndTime"])){
                $this->RequestParams["EndTime"] = $param["EndTime"] ? "true" : "false";
            } else {
                $this->RequestParams["EndTime"] = $param["EndTime"];
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