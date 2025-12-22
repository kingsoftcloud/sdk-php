<?php
namespace  Ksyun\Client\Cloud_advisor\V20250610\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListInspectionItemRequest extends BaseModel
{
    public $RequestParams = [
         /**Int**/
        "pageNum" => null,
         /**Int**/
        "pageSize" => null,
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
        if (array_key_exists("pageNum",$param) and $param["pageNum"] !== null) {
            if(is_bool($param["pageNum"])){
                $this->RequestParams["pageNum"] = $param["pageNum"] ? "true" : "false";
            } else {
                $this->RequestParams["pageNum"] = $param["pageNum"];
            }
        }
        if (array_key_exists("pageSize",$param) and $param["pageSize"] !== null) {
            if(is_bool($param["pageSize"])){
                $this->RequestParams["pageSize"] = $param["pageSize"] ? "true" : "false";
            } else {
                $this->RequestParams["pageSize"] = $param["pageSize"];
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