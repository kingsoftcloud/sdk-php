<?php
namespace  Ksyun\Client\Aicp\V20251114\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListSessionsRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "MemoryCollectionId" => null,
         /**String**/
        "AgentUserId" => null,
         /**String**/
        "Query" => null,
         /**Int**/
        "Page" => null,
         /**Int**/
        "PageSize" => null,
         /**Int**/
        "CreatedAfter" => null,
         /**Int**/
        "CreatedBefore" => null,
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
        if (array_key_exists("MemoryCollectionId",$param) and $param["MemoryCollectionId"] !== null) {
            if(is_bool($param["MemoryCollectionId"])){
                $this->RequestParams["MemoryCollectionId"] = $param["MemoryCollectionId"] ? "true" : "false";
            } else {
                $this->RequestParams["MemoryCollectionId"] = $param["MemoryCollectionId"];
            }
        }
        if (array_key_exists("AgentUserId",$param) and $param["AgentUserId"] !== null) {
            if(is_bool($param["AgentUserId"])){
                $this->RequestParams["AgentUserId"] = $param["AgentUserId"] ? "true" : "false";
            } else {
                $this->RequestParams["AgentUserId"] = $param["AgentUserId"];
            }
        }
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            if(is_bool($param["Query"])){
                $this->RequestParams["Query"] = $param["Query"] ? "true" : "false";
            } else {
                $this->RequestParams["Query"] = $param["Query"];
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
        if (array_key_exists("CreatedAfter",$param) and $param["CreatedAfter"] !== null) {
            if(is_bool($param["CreatedAfter"])){
                $this->RequestParams["CreatedAfter"] = $param["CreatedAfter"] ? "true" : "false";
            } else {
                $this->RequestParams["CreatedAfter"] = $param["CreatedAfter"];
            }
        }
        if (array_key_exists("CreatedBefore",$param) and $param["CreatedBefore"] !== null) {
            if(is_bool($param["CreatedBefore"])){
                $this->RequestParams["CreatedBefore"] = $param["CreatedBefore"] ? "true" : "false";
            } else {
                $this->RequestParams["CreatedBefore"] = $param["CreatedBefore"];
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