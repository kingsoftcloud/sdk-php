<?php
namespace  Ksyun\Client\Kpfs\V20240930\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class DescribeMigrateTasksRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "RuleId" => null,
         /**String**/
        "TaskId" => null,
         /**Long**/
        "PageSize" => null,
         /**Long**/
        "PageNum" => null,
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            if(is_bool($param["RuleId"])){
                $this->RequestParams["RuleId"] = $param["RuleId"] ? "true" : "false";
            } else {
                $this->RequestParams["RuleId"] = $param["RuleId"];
            }
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            if(is_bool($param["TaskId"])){
                $this->RequestParams["TaskId"] = $param["TaskId"] ? "true" : "false";
            } else {
                $this->RequestParams["TaskId"] = $param["TaskId"];
            }
        }
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            if(is_bool($param["PageSize"])){
                $this->RequestParams["PageSize"] = $param["PageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["PageSize"] = $param["PageSize"];
            }
        }
        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            if(is_bool($param["PageNum"])){
                $this->RequestParams["PageNum"] = $param["PageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["PageNum"] = $param["PageNum"];
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