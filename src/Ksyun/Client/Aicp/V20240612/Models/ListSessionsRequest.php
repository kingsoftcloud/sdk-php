<?php
namespace  Ksyun\Client\Aicp\V20240612\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListSessionsRequest extends BaseModel
{
    public $RequestParams = [
         /**Object**/
        "TagFilters" => null,
         /**String**/
        "TagMatch" => null,
         /**String**/
        "AgentId" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
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
        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            if(is_bool($param["TagFilters"])){
                $this->RequestParams["TagFilters"] = $param["TagFilters"] ? "true" : "false";
            } else {
                $this->RequestParams["TagFilters"] = $param["TagFilters"];
            }
        }
        if (array_key_exists("TagMatch",$param) and $param["TagMatch"] !== null) {
            if(is_bool($param["TagMatch"])){
                $this->RequestParams["TagMatch"] = $param["TagMatch"] ? "true" : "false";
            } else {
                $this->RequestParams["TagMatch"] = $param["TagMatch"];
            }
        }
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            if(is_bool($param["AgentId"])){
                $this->RequestParams["AgentId"] = $param["AgentId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentId"] = $param["AgentId"];
            }
        }
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            if(is_bool($param["Page"])){
                $this->RequestParams["Page"] = $param["Page"] ? "true" : "false";
            } else {
                $this->RequestParams["Page"] = $param["Page"];
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