<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeDataFlowStrategyListRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "FileSystemId" => null,
         /**String**/
        "StrategyId" => null,
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