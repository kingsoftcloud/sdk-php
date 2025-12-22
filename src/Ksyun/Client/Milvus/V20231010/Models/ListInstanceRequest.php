<?php
namespace  Ksyun\Client\Milvus\V20231010\Models;

use Ksyun\Common\BaseModel;
use Ksyun\Common\Http\HttpOptions;

class ListInstanceRequest extends BaseModel
{
    public $RequestParams = [
         /**String**/
        "Offset" => null,
         /**String**/
        "Limit" => null,
         /**String**/
        "FuzzySearch" => null,
         /**String**/
        "SecBindingStatus" => null,
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            if(is_bool($param["Offset"])){
                $this->RequestParams["Offset"] = $param["Offset"] ? "true" : "false";
            } else {
                $this->RequestParams["Offset"] = $param["Offset"];
            }
        }
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            if(is_bool($param["Limit"])){
                $this->RequestParams["Limit"] = $param["Limit"] ? "true" : "false";
            } else {
                $this->RequestParams["Limit"] = $param["Limit"];
            }
        }
        if (array_key_exists("FuzzySearch",$param) and $param["FuzzySearch"] !== null) {
            if(is_bool($param["FuzzySearch"])){
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"] ? "true" : "false";
            } else {
                $this->RequestParams["FuzzySearch"] = $param["FuzzySearch"];
            }
        }
        if (array_key_exists("SecBindingStatus",$param) and $param["SecBindingStatus"] !== null) {
            if(is_bool($param["SecBindingStatus"])){
                $this->RequestParams["SecBindingStatus"] = $param["SecBindingStatus"] ? "true" : "false";
            } else {
                $this->RequestParams["SecBindingStatus"] = $param["SecBindingStatus"];
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